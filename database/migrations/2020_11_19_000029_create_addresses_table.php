<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('alternate_phone')->nullable();
            $table->longText('address_1');
            $table->integer('pincode');
            $table->string('city');
            $table->string('additional_note')->nullable();
            $table->longText('address_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
