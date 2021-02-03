<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    
    protected $table = 'merk';
    protected $fillable = ['ID_PEGAWAI','NAMA_MERK'];
    public $timestamps = false;
}
