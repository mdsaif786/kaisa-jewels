<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBooksTable extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('book_authors_id')->nullable();
            $table->foreign('book_authors_id', 'book_authors_fk_2079159')->references('id')->on('authors');
            $table->unsignedBigInteger('publisher_id')->nullable();
            $table->foreign('publisher_id', 'publisher_fk_2079160')->references('id')->on('publishers');
            $table->unsignedBigInteger('stock_status_id')->nullable();
            $table->foreign('stock_status_id', 'stock_status_fk_2079161')->references('id')->on('stock_statuses');
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id', 'language_fk_2079165')->references('id')->on('languages');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_2079166')->references('id')->on('book_categories');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id', 'sub_category_fk_2079167')->references('id')->on('book_categories');
        });
    }
}
