<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function portfolio() {
        return view('portfolio');
    }
}
