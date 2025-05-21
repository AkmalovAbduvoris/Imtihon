<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{

    public function index(Request $request)
    {
        $filter = $request->query('filter');

        $query = Transaction::orderBy('transaction_date', 'desc');

        if ($filter) {
            switch ($filter) {
                case 'day':
                    $query->where('transaction_date', '>=', Carbon::now()->subDay());
                    break;
                case 'week':
                    $query->where('transaction_date', '>=', Carbon::now()->subWeek());
                    break;
                case 'month':
                    $query->where('transaction_date', '>=', Carbon::now()->subMonth());
                    break;
                case 'year':
                    $query->where('transaction_date', '>=', Carbon::now()->subYear());
                    break;
            }
        }

        $transactions = $query->get();
        $balance = Balance::first();

        return view('transactions.index', compact('transactions', 'balance', 'filter'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric|min:0|max:999999.99',
            'description' => 'nullable|string|max:255',
        ]);

        $balance = Balance::first();

        // Harajat bo‘lsa — mablag‘ yetarliligini tekshir
        if ($request->type === 'expense' && $balance->amount < $request->amount) {
            return redirect()->back()->withErrors(['amount' => 'Insufficient balance for this transaction.']);
        }

        // Tranzaksiyani yozish
        $transaction = Transaction::create($request->all());

        // Balansni yangilash
        if ($request->type === 'income') {
            $balance->amount += $request->amount;
        } else {
            $balance->amount -= $request->amount;
        }

        $balance->save();

        return redirect()->route('home');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
