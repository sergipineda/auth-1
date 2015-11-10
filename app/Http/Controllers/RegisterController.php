<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function getRegister(){
       // echo "Aqui va el registre";
        return view('register');
    }
    /*public function postRegister(){
        // echo "Aqui va el registre";
        dd(Input::all());
    }*/
    public function postRegister(){
        // echo "Aqui va el registre";
        $user = new User();
        $user -> name = Input::get('name');
        $user -> password = Input::get('password');
        $user -> email = Input::get('email');

        $user->save();

    }
}
