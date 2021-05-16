<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['name'] = 'Inicio';
        $data['title'] = 'Home';
        return view('home', $data);
    }
}
