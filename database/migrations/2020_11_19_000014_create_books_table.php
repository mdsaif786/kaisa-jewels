<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->decimal('mrp', 15, 2)->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('discount')->nullable();
            $table->string('isbn')->nullable();
            $table->string('book_type');
            $table->longText('description')->nullable();
            $table->string('sku')->nullable();
            $table->string('weight')->nullable();
            $table->string('dimensions')->nullable();
            $table->integer('no_of_pages')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->decimal('coupon_discount', 15, 2)->nullable();
            $table->integer('no_of_qty_for_discount')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('isbn_30')->nullable();
            $table->string('isbn_10')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('publication_city_or_country')->nullable();
            $table->boolean('handpicked')->default(0)->nullable();
            $table->boolean('new_arrival')->default(0)->nullable();
            $table->boolean('best_sellers')->default(0)->nullable();
            $table->boolean('all_time_classic')->default(0)->nullable();
            $table->integer('no_of_viewed')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
