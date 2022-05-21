<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertValueInPriceBlocked extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         $price_blocks = array(
          array('block_title' =>'Buy Book under' ,'set_order'=>1,'price'=>49,'status'=>1),
          array('block_title' =>'Buy Book under' ,'set_order'=>1,'price'=>99,'status'=>1),
          array('block_title' =>'Buy Book under' ,'set_order'=>1,'price'=>149,'status'=>1),
          array('block_title' =>'Buy Book under' ,'set_order'=>1,'price'=>199,'status'=>1),
        );
      DB::table('price_blocks')->insert($price_blocks);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('price_blocked', function (Blueprint $table) {
            //
        });
    }
}
