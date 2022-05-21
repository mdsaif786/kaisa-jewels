<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBookReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('book_reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id', 'book_fk_2079249')->references('id')->on('books');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2079250')->references('id')->on('users');
        });
    }
}
