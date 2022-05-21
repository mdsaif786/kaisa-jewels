<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceBlocksTable extends Migration
{
    public function up()
    {
        Schema::create('price_blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('block_title')->nullable();
            $table->string('status')->nullable();
            $table->integer('set_order')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
