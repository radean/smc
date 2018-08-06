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
    public function perma()
    {
        return view('services.perma');
    }
    public function eukor()
    {
        return view('services.eukor');
    }
    public function hglovis()
    {
        return view('services.hglovis');
    }
    public function transportation()
    {
        return view('services.transportation');
    }
    public function logistics()
    {
        return view('services.logistics');
    }


    //Redirect To Contact page
    public function contact()
    {
        return view('contact');
    }
}
