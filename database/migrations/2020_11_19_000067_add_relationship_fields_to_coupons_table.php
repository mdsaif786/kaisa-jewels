<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCouponsTable extends Migration
{
    public function up()
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->unsignedBigInteger('book_category_id')->nullable();
            $table->foreign('book_category_id', 'book_category_fk_2621062')->references('id')->on('book_categories');
        });
    }
}
