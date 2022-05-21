<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockOffersTable extends Migration
{
    public function up()
    {
        Schema::create('block_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('offer_type');
            $table->integer('general_discount')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
