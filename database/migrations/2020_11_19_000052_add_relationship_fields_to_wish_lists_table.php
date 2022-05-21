<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWishListsTable extends Migration
{
    public function up()
    {
        Schema::table('wish_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2621472')->references('id')->on('users');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id', 'book_fk_2621474')->references('id')->on('books');
        });
    }
}
