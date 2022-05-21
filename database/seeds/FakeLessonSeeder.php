<?php

use Illuminate\Database\Seeder;

class FakeLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lesson::class,10)->create();
    }
}
