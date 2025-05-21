<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Balance;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = request()->query('filter');

        
        $query = Transaction::orderBy('transaction_date', 'desc');


        if ($filter) {
            switch ($filter) {
                case 'day':
                    $query->where('transaction_date', '>=', now()->subDay());
                    break;
                case 'week':
                    $query->where('transaction_date', '>=', now()->subWeek());
                    break;
                case 'month':
                    $query->where('transaction_date', '>=', now()->subMonth());
                    break;
                case 'year':
                    $query->where('transaction_date', '>=', now()->subYear());
                    break;
            }
        }
        $transactions = $query->get();

        return response()->json($transactions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
