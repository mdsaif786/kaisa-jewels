<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_2086222')->references('id')->on('orders');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id', 'book_fk_2086224')->references('id')->on('books');
            $table->unsignedBigInteger('combo_offer_id')->nullable();
            $table->foreign('combo_offer_id', 'combo_offer_fk_2621535')->references('id')->on('combo_offers');
        });
    }
}
