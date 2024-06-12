<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class QuizTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/loginUser')
                    ->type('Email','a@gmail.com')
                    ->type('Password','12345678')
                    ->press('User Login')
                    ->assertPathIs('/dashboardUser')
                    ->visit('/quizUser/1')
                    ->check('2')
                    ->press('Submit')
                    ->assertPathIs('quizUser')
                    ->click('a[id="button-navbar"]')
                    ->clickLink('LogOut')
                    ->assertPathIs('/');
        });
    }
}
