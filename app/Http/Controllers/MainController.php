<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //Redirect to About View
    public function index() {

        return view('about');

    }

    //Redirect To Services page
    public function services()
    {
        return view('services.index');
    }
    public function hmm()
    {
        return view('services.hmm');
    }

    //Redirect To Contact page
    public function contact()
    {
        return view('contact');
    }
}
