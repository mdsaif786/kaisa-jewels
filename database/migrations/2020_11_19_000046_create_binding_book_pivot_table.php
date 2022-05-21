<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBindingBookPivotTable extends Migration
{
    public function up()
    {
        Schema::create('binding_book', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'book_id_fk_2079162')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('binding_id');
            $table->foreign('binding_id', 'binding_id_fk_2079162')->references('id')->on('bindings')->onDelete('cascade');
        });
    }
}
