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

}
