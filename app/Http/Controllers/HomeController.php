<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function form(Request $request)
    {

        $dataMessage = $request->message;

        
        return view('home', ['message' => $dataMessage]);
    }
}
