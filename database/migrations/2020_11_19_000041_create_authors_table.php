<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('about_author')->nullable();
            $table->string('short_caption')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
