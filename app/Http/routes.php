<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/resource', function () {
    \Debugbar::startMeasure("resource");
    $authenticated = false;
    Session::set('authenticated',true);
    //dd(Session::all());
    \Debugbar::info("Xivato1!!!!!");
    \Debugbar::info(Session::all());
    if (Session::has('authenticated')) {
        if (Session::get('authenticated') == true ) {
            $authenticated = true;
        }
    }

    if ($authenticated) {
        \Debugbar::stopMeasure("resource");
        return view('resource');
    } else {
        \Debugbar::stopMeasure("resource");
        return view('login');
    }

});
