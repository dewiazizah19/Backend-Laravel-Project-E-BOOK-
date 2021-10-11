<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function transaksi(){
        return view('transaksi');
    }

    public function userdata(){
        return view('userdata');
    }

    public function bookdata(){
        return view('bookdata');
    }

}