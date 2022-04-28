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

}
