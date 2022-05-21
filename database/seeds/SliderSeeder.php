<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Slider::class,15)->create();

        factory(App\Models\Publisher::class,10)->create();

        factory(App\Models\Author::class,10)->create();

    }
}
