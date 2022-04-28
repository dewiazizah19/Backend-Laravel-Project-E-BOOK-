<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserdataModel extends Model
{
    public function allData()
    {
        return DB::table('tabel_login')->get();
    }

    public function createdata ($data)
    {
        DB::table('tabel_login')->insert($data);
    }

    public function deletedata ($id_pengguna)
    {
        DB::table('tabel_login')
            ->where('id_pengguna', $id_pengguna)
            ->delete();
    }
}