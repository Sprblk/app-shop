<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome(){
    	$a = 10;
    	$b = 15;
    	$c = $a + $b;

    	//return "La suma de los valores es $c";
    	return view('welcome');
    }
}
