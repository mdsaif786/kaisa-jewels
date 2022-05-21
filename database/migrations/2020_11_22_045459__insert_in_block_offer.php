<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertInBlockOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         $block_offers = array(
          array('title' =>'Nonfiction sale upto 10% off' ,'offer_type'=>1,'general_discount'=>10,'status'=>1),
          array('title' =>'Christmas Sale upto 20% off' ,'offer_type'=>1,'general_discount'=>20,'status'=>1),
         array('title' =>'Sthual Special Sale upto 40% off' ,'offer_type'=>1,'general_discount'=>40,'status'=>1),
         
        );
      DB::table('block_offers')->insert($block_offers);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('block_offer', function (Blueprint $table) {
            //
        });
    }
}
