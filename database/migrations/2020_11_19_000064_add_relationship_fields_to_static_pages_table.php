<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStaticPagesTable extends Migration
{
    public function up()
    {
        Schema::table('static_pages', function (Blueprint $table) {
            $table->unsignedBigInteger('static_page_type_id');
            $table->foreign('static_page_type_id', 'static_page_type_fk_2079110')->references('id')->on('static_page_types');
        });
    }
}
