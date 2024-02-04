<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlienController extends Controller
{
    public function index()  //php artisan make:controller BlogController
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }


    public function formContactSub(Request $request)
    {
        //return $request;
        return view('contact', ['data' => $request]);
    }

}
