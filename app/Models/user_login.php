<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_login extends Model
{
    use HasFactory;

    protected $table = "tabel_login";
    protected $primarykey = "email";
    protected $filllable = ['email', 'username', 'id_pengguna', 'password', 'last_login'];
}
