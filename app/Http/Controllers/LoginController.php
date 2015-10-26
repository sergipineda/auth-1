<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function postLogin(Request $request) {
        //TODO
        //dd($request->all());
        //\Debugbar::info("Ok entra a postLogin");
        //echo "asdasd";

        if ($this->login($request->email,$request->password)) {
            //REDIRECT TO HOME
            return redirect()->route('auth.home');
        } else {
            //REDIRECT BACK
            return redirect()->route('auth.login');
        }
    }

    private function login($email, $password)
    {
        //TODO: Mirar bé a la base de dades
        return true;
    }

    public function getLogin() {
        return view('login');
    }


}
