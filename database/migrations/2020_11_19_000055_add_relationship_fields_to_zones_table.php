<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToZonesTable extends Migration
{
    public function up()
    {
        Schema::table('zones', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_2078913')->references('id')->on('countries');
        });
    }
}
