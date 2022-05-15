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

    public function insert(Request $request)
    {
        UserdataModel::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect('userdata');
    }

    public function delete($id_pengguna)
    {
        $this->UserdataModel->deletedata($id_pengguna);
        return redirect()->route('userdata')->with('pesan','Data Berhasil Di Hapus');
    }
}