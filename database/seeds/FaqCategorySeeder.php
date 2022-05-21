<?php

use Illuminate\Database\Seeder;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\FaqCategory::class, 5)->create();
    }
}
