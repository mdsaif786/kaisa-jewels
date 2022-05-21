<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('available_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_name');
            $table->string('currency_symbol')->nullable();
            $table->string('short_name');
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
