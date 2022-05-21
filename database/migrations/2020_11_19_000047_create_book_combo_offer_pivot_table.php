<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookComboOfferPivotTable extends Migration
{
    public function up()
    {
        Schema::create('book_combo_offer', function (Blueprint $table) {
            $table->unsignedBigInteger('combo_offer_id');
            $table->foreign('combo_offer_id', 'combo_offer_id_fk_2621204')->references('id')->on('combo_offers')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'book_id_fk_2621204')->references('id')->on('books')->onDelete('cascade');
        });
    }
}
