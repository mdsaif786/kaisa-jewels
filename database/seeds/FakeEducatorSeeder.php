<?php

use Illuminate\Database\Seeder;

class FakeEducatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Educator::class,50)->create();
    }
}
