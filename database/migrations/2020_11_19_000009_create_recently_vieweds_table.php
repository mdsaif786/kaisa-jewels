<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentlyViewedsTable extends Migration
{
    public function up()
    {
        Schema::create('recently_vieweds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date_time')->nullable();
            $table->string('url')->nullable();
            $table->string('ip')->nullable();
            $table->integer('no_of_times')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
