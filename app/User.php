
<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

// class User extends Model
// {
    
//     protected $table = 'pegawai';
//     protected $fillable = ['ID_PEGAWAI','ID_JABATAN','ID_KOTA','NAMA_PEGAWAI', 'JK_PEGAWAI','TELP_PEGAWAI','ALAMAT','USERNAME','PASSWORD','STATUS_PEGAWAI'];
//     public $timestamps = false;
// }

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pegawai extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'password','jabatan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

