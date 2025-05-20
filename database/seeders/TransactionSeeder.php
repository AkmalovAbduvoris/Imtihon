<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Faker\Factory as Faker;
use App\Models\Balance;

class TransactionSeeder extends Seeder
{
    public $count = 10;

    public function run()
{
    $faker = Faker::create();
    $balance = Balance::first();

    for ($i = 0; $i < $this->count; $i++) {
        $type = $faker->randomElement(['income', 'expense']);
        $amount = $faker->randomFloat(2, 10, 10000);

        Transaction::create([
            'type' => $type,
            'amount' => $amount,
            'description' => $faker->sentence(),
            'transaction_date' => $faker->dateTimeBetween('-6 months', 'now'),
        ]);

        if ($type === 'income') {
            $balance->amount += $amount;
        } elseif ($type === 'expense' && $balance->amount >= $amount) {
            $balance->amount -= $amount;
        }
    }

    $balance->save();
}
}
