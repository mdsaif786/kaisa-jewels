<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBussinessWithusesTable extends Migration
{
    public function up()
    {
        Schema::create('bussiness_withuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name')->nullable();
            $table->string('email');
            $table->string('mobile')->nullable();
            $table->string('message')->nullable();
            $table->string('city_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
