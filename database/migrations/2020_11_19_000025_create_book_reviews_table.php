<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('book_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->integer('review_point')->nullable();
            $table->longText('message')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
