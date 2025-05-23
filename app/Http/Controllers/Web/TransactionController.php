<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\TransactionController as ServicesTransactionController;
use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{

    public function index(Request $request)
    {
        $filter = $request->query('filter');
        $transactions = ServicesTransactionController::index($filter);

        return view('transactions.index', compact('transactions', 'filter'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $result = ServicesTransactionController::store($request);

        if ($result !== true) {
            return redirect()->back()->withErrors(['amount' => $result]);
        }

        return redirect()->route('home');
    }


    public function show(string $id) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}

}
