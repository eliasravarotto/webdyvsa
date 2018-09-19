<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

 	public function modelo()
    {
        return view('frontend.modelo');
    }

    public function usadosIndex()
    {
        return view('frontend.usados.index');
    }
}
