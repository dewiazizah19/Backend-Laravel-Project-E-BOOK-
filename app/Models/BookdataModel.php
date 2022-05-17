<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookdataModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tabel_buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul', 'genre', 'pengarang', 'penerbit', 'cover', 'harga'];

    public function allData()
    {
        return DB::table('tabel_buku')->get();
    }

    public function detailData($id_buku)
    {
        return DB::table('tabel_buku')->where('id_buku', $id_buku)->first();
    } 

    public function deletedata ($id_buku)
    {
        DB::table('tabel_buku')
            ->where('id_buku', $id_buku)
            ->delete();
    }
}
