<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboOffersTable extends Migration
{
    public function up()
    {
        Schema::create('combo_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('offer_title');
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('discount_amount', 15, 2)->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
