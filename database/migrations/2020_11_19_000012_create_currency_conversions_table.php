<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyConversionsTable extends Migration
{
    public function up()
    {
        Schema::create('currency_conversions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('from_date');
            $table->string('to_date');
            $table->decimal('rate', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
