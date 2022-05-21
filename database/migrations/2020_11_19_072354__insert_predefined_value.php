<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertPredefinedValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     $stock_statuses = array(
            array('name'=>'In Stock'),
            array('name'=>'out of Stock'),
            array('name'=>'Available in next 2-3 days'),
        );

        DB::table('stock_statuses')->insert($stock_statuses);

        $book_categories = array(
            array('name'=>'Action & Adventures','status'=>1,'show_in_mega_menu'=>1,'show_in_menu'=>'1',
                'slug'=>'action-adventures'),
            array('name'=>'Art','status'=>1,'show_in_mega_menu'=>1,'show_in_menu'=>'1',
                'slug'=>'art'),
            array('name'=>'Competition Books','status'=>1,'show_in_mega_menu'=>1,'show_in_menu'=>'1',
                'slug'=>'competition-books'),
            array('name'=>'Competition Books','status'=>1,'show_in_mega_menu'=>1,'show_in_menu'=>'1',
                'slug'=>'competition-books'),
            array('name'=>'Teaching Exam Books','status'=>1,'show_in_mega_menu'=>1,'show_in_menu'=>'1',
                'slug'=>'teaching-exam-books'),
        );

        DB::table('book_categories')->insert($book_categories);

         $bindings = array(
            array('name'=>'Board Book','status'=>1),
            array('name'=>'Boxed Set','status'=>1),
            array('name'=>'Hardback','status'=>1),
            array('name'=>'Large Print','status'=>1),
            array('name'=>'Paperback','status'=>1),
            array('name'=>'Loose Leaf','status'=>1),
        );

        DB::table('bindings')->insert($bindings);
         $languages = array(
            array('name' => 'English', 'is_active' => 1),
            array('name' => 'Hindi', 'is_active' => 1),

        );

        DB::table('languages')->insert($languages);

        $order_statuses = array(
            array('name'=>'New','title'=>'New'),
            array('name'=>'cancelled','title'=>'cancelled'),
            array('name'=>'process','title'=>'process'),
            array('name'=>'Disputed','title'=>'disputed'),
            array('name'=>'Return','title'=>'Return'),
             array('name'=>'Return Request','title'=>'Return Request'),
        );

        DB::table('order_statuses')->insert($order_statuses);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
