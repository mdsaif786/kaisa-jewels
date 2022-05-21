<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_no')->nullable();
            $table->string('invoice_prefix')->nullable();
            $table->string('shipping_charge')->nullable();
            $table->string('gst_amount')->nullable();
            $table->string('coupon')->nullable();
            $table->string('coupon_discount')->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('ip')->nullable();
            $table->integer('is_completed')->nullable();
            $table->decimal('order_amount', 15, 2);
            $table->longText('user_agent')->nullable();
            $table->string('total_book_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('order_date')->nullable();
            $table->string('order_key')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
