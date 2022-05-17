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

    public function detail($id_pengguna)
    {
        if (!$this->UserdataModel->detailData($id_pengguna)) {
            abort(404);
        }

        $data = [
            'userdata'=>$this->UserdataModel->detailData($id_pengguna),
        ];
        return view('detail_userdata', $data);
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

        return redirect()->route('userdata')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function delete($id_pengguna)
    {
        $this->UserdataModel->deletedata($id_pengguna);
        return redirect()->route('userdata')->with('pesan','Data Berhasil Di Hapus');
    }

    public function edit($id_pengguna)
    {
        if (!$this->UserdataModel->detailData($id_pengguna)) {
            abort(404);
        }
        $data = [
            'userdata' => $this->UserdataModel->detailData($id_pengguna),
        ];
        return view('edit_userdata', $data);
    }

    public function update($id_pengguna)
    {
        $data = [
            'email' => Request()->email,
            'username' => Request()->username,
            'password' => Request()->password,
        ];

        $this->UserdataModel->editdata($id_pengguna, $data);
        return redirect()->route('userdata')->with('pesan','Data Berhasil Di Update');
    }
}