<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCollectionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('book_collection', function (Blueprint $table) {
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id', 'collection_id_fk_2620979')->references('id')->on('collections')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'book_id_fk_2620979')->references('id')->on('books')->onDelete('cascade');
        });
    }
}
