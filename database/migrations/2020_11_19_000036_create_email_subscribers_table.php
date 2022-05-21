<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('email_subscribers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
