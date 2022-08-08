<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('bar'); //METHODE DE RECALAGE SI PAS LOG ! ICI FOO AVEC LOG BAR SANS LOG
    }


    public function foo()
    {
        
        
        return view('test.foo');

    }

    public function bar()
    {

        return view('test.bar');

    }
}
