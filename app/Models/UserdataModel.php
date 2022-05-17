<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserdataModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tabel_login';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['email', 'username', 'password'];

    public function allData()
    {
        return DB::table('tabel_login')->get();
    }

    public function detailData($id_pengguna)
    {
        return DB::table('tabel_login')->where('id_pengguna', $id_pengguna)->first();
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

    public function editData ($id_pengguna, $data)
    {
        DB::table('tabel_login')
        ->where('id_pengguna', $id_pengguna)
        ->update($data);
    }
}