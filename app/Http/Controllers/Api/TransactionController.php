<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Balance;
use App\Http\Controllers\Services\TransactionController as ServicesTransactionController;

class TransactionController extends Controller
{

    public function index()
    {
        $filter = request()->query('filter');

        $transactions = ServicesTransactionController::index($filter);

        return response()->json($transactions);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric|min:0|max:999999.99',
            'description' => 'nullable|string|max:255',
        ]);

        $balance = Balance::first();

        if ($request->type === 'expense' && $balance->amount < $request->amount) {
            return response()->json([
                'message' => 'Insufficient balance',
            ], 422);
        }

        Transaction::create($request->all());

        if ($request->type === 'income') {
            $balance->amount += $request->amount;
        } else {
            $balance->amount -= $request->amount;
        }

        $balance->save();

        return response()->json([
            'message' => 'Transaction created successfully',
        ], 201);
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
