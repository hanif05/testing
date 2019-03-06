<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    protected $table = 'pustakawan';
    protected $fillable = ['id_pegawai', 'nama', 'jk', 'no_hp', 'alamat'];
}
