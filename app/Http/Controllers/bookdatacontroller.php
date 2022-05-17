<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookdataModel;

class bookdatacontroller extends Controller
{
    
    
    public function __construct()
    {
        $this->BookdataModel = new BookdataModel();
    }


    public function bookdata()
    {
        $bookdata = [
            'bookdata'=>$this->BookdataModel->allData(),
        ];
        return view('bookdata', $bookdata);
    }

    public function detail($id_buku)
    {
        if (!$this->BookdataModel->detailData($id_buku)) {
            abort(404);
        }

        $bd = [
            'bookdata'=>$this->BookdataModel->detailData($id_buku),
        ];
        return view('detail_bookdata', $bd);
    }

    public function delete($id_buku)
    {
        $this->BookdataModel->deletedata($id_buku);
        return redirect()->route('bookdata')->with('pesan','Data Berhasil Di Hapus');
    }
}
