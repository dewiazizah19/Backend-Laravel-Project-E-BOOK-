<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiModel;

class transaksicontroller extends Controller
{
    
    
    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
    }


    public function transaksi()
    {
        $transaksi = [
            'transaksi'=>$this->TransaksiModel->allData(),
        ];
        return view('transaksi', $transaksi);
    }

    public function delete($id_transaksi)
    {
        $this->TransaksiModel->deletedata($id_transaksi);
        return redirect()->route('bookdata')->with('pesan','Data Berhasil Di Hapus');
    }
}
