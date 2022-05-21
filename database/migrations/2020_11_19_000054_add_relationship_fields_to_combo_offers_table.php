<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToComboOffersTable extends Migration
{
    public function up()
    {
        Schema::table('combo_offers', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_2621199')->references('id')->on('book_categories');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id', 'sub_category_fk_2621200')->references('id')->on('book_categories');
        });
    }
}
