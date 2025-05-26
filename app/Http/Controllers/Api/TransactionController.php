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
        $result = ServicesTransactionController::store($request);
        if (is_string($result)) {
            return response()->json([
                'message' => $result,
            ], 422);
        }
        if ($result === false) {
            return response()->json([
                'message' => 'Transaction could not be created',
            ], 500);
        }
        if ($result === true) {
            return response()->json([
                'message' => 'Transaction created successfully',
            ], 201);
        }
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
