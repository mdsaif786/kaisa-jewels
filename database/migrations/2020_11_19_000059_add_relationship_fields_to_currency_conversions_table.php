<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCurrencyConversionsTable extends Migration
{
    public function up()
    {
        Schema::table('currency_conversions', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_fk_2584820')->references('id')->on('countries');
        });
    }
}
