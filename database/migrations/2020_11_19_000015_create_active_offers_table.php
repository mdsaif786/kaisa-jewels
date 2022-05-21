<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveOffersTable extends Migration
{
    public function up()
    {
        Schema::create('active_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('offer_title');
            $table->string('banner_image')->nullable();
            $table->string('status')->nullable();
            $table->integer('discount_bracket')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
