<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupon_name');
            $table->string('coupon_code');
            $table->decimal('discount', 15, 2);
            $table->decimal('minimum_amount', 15, 2)->nullable();
            $table->string('coupon_discount_type');
            $table->string('status');
            $table->boolean('is_flash_sale')->default(0)->nullable();
            $table->string('coupon_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
