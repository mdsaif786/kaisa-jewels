<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBookCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('book_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_category_id')->nullable();
            $table->foreign('parent_category_id', 'parent_category_fk_2621059')->references('id')->on('book_categories');
        });
    }
}
