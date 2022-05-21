<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertValueInCurrencies1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $currency_conversions = array(
          array('country_id' =>229 ,'from_date'=>Date('Y-m-d'),'to_date'=>'2020-12-31','rate'=>70),
          array('country_id' =>228 ,'from_date'=>Date('Y-m-d'),'to_date'=>'2020-12-31','rate'=>83),
        );
      DB::table('currency_conversions')->insert($currency_conversions);
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
