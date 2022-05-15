<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiModel extends Model
{
    public function allData()
    {
        return DB::table('tabel_transaksi')->get();
    }

    public function deletedata ($id_transaksi)
    {
        DB::table('tabel_transaksi')
            ->where('id_transaksi', $id_transaksi)
            ->delete();
    }
}
