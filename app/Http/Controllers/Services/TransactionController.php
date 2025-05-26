<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Balance;

class TransactionController extends Controller
{
    public static function index(?string $filter = null)
    {
        $query = Transaction::orderBy('transaction_date', 'desc');

        if ($filter) {
            $date = match ($filter) {
                'day' => now()->subDay(),
                'week' => now()->subWeek(),
                'month' => now()->subMonth(),
                'year' => now()->subYear(),
                default => null,
            };

            if ($date) {
                $query->where('transaction_date', '>=', $date);
            }
        }

        $transactions = $query->get();

        return $transactions;
    }

    public static function store(Request $request): bool|string
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric|min:1|max:999999.99',
            'description' => 'nullable|string|max:255',
        ],
        [
            'type.required' => "Transaction type is required.",
            'type.in' => 'Transaction type must be either income or expense.',
            'amount.required' => 'Amount is required.',
            'amount.numeric' => 'Amount must be a number.',
            'amount.min' => 'Amount must be at least 1.',
            'amount.max' => 'Amount cannot exceed 999999.99.',
            'description.string' => 'Description must be a string.',
            'description.max' => 'Description cannot exceed 255 characters.',
        ]);

        $balance = Balance::first();

        if (!$balance) {
            return 'Balance record not found.';
        }

        if ($request->type === 'expense' && $balance->amount < $request->amount) {
            return 'Insufficient balance for this transaction.';
        }

        Transaction::create($request->all());

        if ($request->type === 'income') {
            $balance->amount += $request->amount;
        } else {
            $balance->amount -= $request->amount;
        }

        $balance->save();

        return true;
    }
}
