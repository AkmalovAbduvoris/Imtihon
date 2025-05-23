<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\BalanceController as ServicesBalanceController;
use Illuminate\Http\Request;
use App\Models\Balance;

class BalanceController extends Controller
{

    public function index() {}

    public function create() {}

    public function store(Request $request)
    {
        ServicesBalanceController::store();

        return redirect('/');
    }

    public function show(string $id) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}
}
