<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class userdatacontroller extends Controller
{
    //
    public function userdata(){
        $data_user = DB::table('tabel_login')->get();
        return view('userdata',['data_user'=>$data_user]);
    }
}
