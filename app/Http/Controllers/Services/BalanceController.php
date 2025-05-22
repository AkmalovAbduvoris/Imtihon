<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Balance;

class BalanceController extends Controller
{
    public static function store() : void
    {
        Balance::create([
            'amount' => 0,
        ]);
        
    }

}
