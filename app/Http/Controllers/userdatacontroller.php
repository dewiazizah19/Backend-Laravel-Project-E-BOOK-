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
        return view('input_userdata.html');
    }

    public function insert()
    {
        Request()->validate([
            'email' => 'required|unique:tabel_login,email|max:255',
            'username' => 'required|min:5|max:50',
            'Password' => 'required|min:5|max:10',
        ]);

        $data = [
            'email' => Request()->email,
            'username' => Request()->username,
            'password' => Request()->password,
        ];

        $this->UserdataModel->createdata($data);
        return redirect()->route('userdata')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function delete($id_pengguna)
    {
        $this->UserdataModel->deletedata($id_pengguna);
        return redirect()->route('userdata')->with('pesan','Data Berhasil Di Hapus');
    }
}