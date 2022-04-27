<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserdataModel;

class userdatacontroller extends Controller
{
    
    
    public function __construct()
    {
        $this->UserdataModel = new UserdataModel();
    }


    public function userdata()
    {
        $data = [
            'userdata'=>$this->UserdataModel->allData(),
        ];
        return view('userdata', $data);
    }

    public function create()
    {
        return view('input_userdata');
    }

    public function insert()
    {
        Request()->validate([
            'email' => 'required|unique:tabel_login,email|max:255',
            'username' => 'required|min:5|max:50',
            'id_pengguna' => 'required',
            'Password' => 'required|min:5|max:10',
            'last_login' => 'required',
        ]);

        $data = [
            'email' => Request()->email,
            'username' => Request()->username,
            'id_pengguna' => Request()->id_pengguna,
            'password' => Request()->password,
            'last_login' => Request()->last_login,
        ];

        $this->UserdataModel->createdata($data);
        return redirect()->route('userdata')->witd('pesan','Data Berhasil Di Tambahkan');
    }
}