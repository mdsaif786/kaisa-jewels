<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('order_status_id')->nullable();
            $table->foreign('order_status_id', 'order_status_fk_2086020')->references('id')->on('order_statuses');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id', 'address_fk_2086021')->references('id')->on('addresses');
        });
    }
}
