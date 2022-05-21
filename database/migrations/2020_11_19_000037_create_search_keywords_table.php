<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchKeywordsTable extends Migration
{
    public function up()
    {
        Schema::create('search_keywords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('keyword_name');
            $table->string('ip')->nullable();
            $table->timestamps();
        });
    }
}
