<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
public function up()
{
    Schema::table('transactions', function (Blueprint $table) {
        $table->date('transaction_date')->default(DB::raw('CURRENT_DATE'))->change();
    });
}

public function down()
{
    Schema::table('transactions', function (Blueprint $table) {
        $table->date('transaction_date')->default(null)->change();
    });
}
};
