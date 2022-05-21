<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('book_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('show_in_mega_menu')->nullable();
            $table->string('show_in_menu')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('set_order')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
