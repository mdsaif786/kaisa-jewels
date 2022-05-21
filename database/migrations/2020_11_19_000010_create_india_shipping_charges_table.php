<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndiaShippingChargesTable extends Migration
{
    public function up()
    {
        Schema::create('india_shipping_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pincode');
            $table->string('circle_name')->nullable();
            $table->string('taluk')->nullable();
            $table->string('office_name')->nullable();
            $table->string('district_name')->nullable();
            $table->string('region_name')->nullable();
            $table->string('hq_rate_per_kg')->nullable();
            $table->string('other_rate')->nullable();
            $table->string('cod_rate')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
