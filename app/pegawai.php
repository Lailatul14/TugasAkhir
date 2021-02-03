<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['ID_PEGAWAI','ID_JABATAN','ID_KOTA','NAMA_PEGAWAI', 'JK_PEGAWAI','TELP_PEGAWAI','ALAMAT','USERNAME','PASSWORD','STATUS_PEGAWAI'];
    public $timestamps = false;
}
