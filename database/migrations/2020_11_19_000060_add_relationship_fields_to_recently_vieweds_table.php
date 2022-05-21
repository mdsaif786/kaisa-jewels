<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRecentlyViewedsTable extends Migration
{
    public function up()
    {
        Schema::table('recently_vieweds', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id', 'book_fk_2086270')->references('id')->on('books');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2621706')->references('id')->on('users');
        });
    }
}
