<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $binding=\App\Models\Binding::all();
            factory(App\Models\Book::class,50)->create()->each(function ($user) use ($binding) {
            $user->binding_types()->attach(
                $binding->random(rand(1,3))->pluck('id')->toArray()
            );
          });
    }
}
