<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('default_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('rate', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
