<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */


    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Hello');
    }

    public function testLoginPage()
    {
        $this->visit(route('auth.login'))
            ->see('LOGIN');
    }

    /**
     * Cheack a user without acces to resource
     *
     * @return void
     */

    private function unlogged(){
        Session::set('authenticated',false);
    }
    private function logged(){
        Session::set('authenticated',true);
    }
    public function testUserWithoutAccessToResource()
    {
        $this->unlogged();
        $this->visit('/resource')
        ->seePageIs(route('auth.login'))
        ->see('LOGIN')
            ->dontSee('Logout');
            //->see('LOGIN')
    }

    public function testLoginPageHaveRegisterLinkAndWorksOk()
    {

        $this->visit('/login')
            ->seePageIs('/register')
            ->Click('Register');

        //->see('LOGIN')
    }
    public function testPostLogin()
    {

        $this->visit('/login')
            ->type('spineda@ebre.com', 'email')
            ->type('123456', 'password')
            ->check ('remember')
            ->press('login')
            ->seePageIs('/home');


        //->see('LOGIN')
    }

    /**
     * Cheack a user with acces to resource
     *
     * @return void
     */
    /*public function testUserWithtAccessToResource()
    {
        $this->logged();
        $this->visit('/resource');
            ->
           // ->see('LOGIN');
    }*/
}