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

    public function input_userdata(){
        return view('input_userdata');
    }

    public function detail_userdata(){
        return view('detail_userdata');
    }

    public function edit_userdata(){
        return view('edit_userdata');
    }

    public function detail_bookdata(){
        return view('detail_bookdata');
    }
}