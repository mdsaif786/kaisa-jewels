<?php

use Illuminate\Database\Seeder;

class FakeVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\VendorDetail::class,5)->create();
    }
}
