<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAddressesTable extends Migration
{
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2078908')->references('id')->on('users');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_2078909')->references('id')->on('countries');
            $table->unsignedBigInteger('zone_id')->nullable();
            $table->foreign('zone_id', 'zone_fk_2078910')->references('id')->on('zones');
        });
    }
}
