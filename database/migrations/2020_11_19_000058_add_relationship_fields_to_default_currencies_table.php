<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDefaultCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::table('default_currencies', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_fk_2584943')->references('id')->on('countries');
        });
    }
}
