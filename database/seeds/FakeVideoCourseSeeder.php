<?php

use Illuminate\Database\Seeder;

class FakeVideoCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\VideoCourse::class,10)->create();
    }
}
