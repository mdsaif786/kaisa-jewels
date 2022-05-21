<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PaymentStatusTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = \App\User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.paymentstatus.index'));
            $browser->assertRouteIs('admin.paymentstatus.index');
        });
    }
}
