<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->decimal('unit_price', 15, 2)->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('gst_amount', 15, 2)->nullable();
            $table->decimal('total_amount', 15, 2)->nullable();
            $table->string('cart_item_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
