<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public $name = "route"; 

    public function index()
    {
        return view('route',[
            'title' => 'title'
        ]);
    }

}


