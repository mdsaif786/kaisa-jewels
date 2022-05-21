<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishListsTable extends Migration
{
    public function up()
    {
        Schema::create('wish_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
