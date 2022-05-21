<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertValueInCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $available_currencies = array(
            array('country_name'=>'95','currency_symbol'=>'₹','short_name'=>'INR','status'=>1),
            array('country_name'=>'229','currency_symbol'=>'$','short_name'=>'USD','status'=>1),
            array('country_name'=>'228','currency_symbol'=>'€','short_name'=>'EURO','status'=>1),
        );
      DB::table('available_currencies')->insert($available_currencies);
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
