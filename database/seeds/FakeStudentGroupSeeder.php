<?php

use Illuminate\Database\Seeder;

class FakeStudentGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StudentGroup::class,10)->create();
    }
}
