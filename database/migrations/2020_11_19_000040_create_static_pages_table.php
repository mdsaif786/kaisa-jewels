<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticPagesTable extends Migration
{
    public function up()
    {
        Schema::create('static_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_name')->nullable();
            $table->string('page_title')->nullable();
            $table->longText('page_description')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
