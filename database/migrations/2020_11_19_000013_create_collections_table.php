<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('collection_name');
            $table->string('banner_image')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
