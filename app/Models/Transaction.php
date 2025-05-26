<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Transaction extends Model
{
    protected $fillable = ['amount', 'type', 'description', 'transaction_date'];

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ?? 'No description provided',
        );
    }
}
