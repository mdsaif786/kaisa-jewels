<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginIpsTable extends Migration
{
    public function up()
    {
        Schema::create('login_ips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user')->nullable();
            $table->string('ip')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
