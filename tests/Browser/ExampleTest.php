<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://syscor-homologacao.before.com.br/_sys/?logUfIdSession=12')
                ->assertSee('Bem-vindo ao software de gestão de revendas SysCor Vivo GO.');
        });
    }
}
