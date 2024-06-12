<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class quizTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/loginUser')
            ->type('email','rayhanraya54@gmail.com')
            ->type('password','12345678')
            ->press('User Login')
            ->assertPathIs('/dashboardUser')
            ->visit('/quizUser/1')
            ->radio('Benar[1]', "A")
            ->press('Submit')
            ->assertPathIs('/quizUser')
            ->clickLink('Back to Dashboard')
            ->clickLink('LogOut')
            ->assertPathIs('/');
        });
    }
}
