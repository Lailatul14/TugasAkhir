<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pegawai;
use App\jabatan;


class RegisterController extends Controller
{
    
    
    public function index()
    {
         $jabatan = DB::table('jabatan')->pluck("NAMA_JABATAN","ID_JABATAN");
         $kota = DB::table('kota')->pluck("NAMA_KOTA","ID_KOTA");
        return view('Login/register',compact('kota', 'jabatan'));
       

    }

   
    public function store(Request $request)
    {
         pegawai::create([
            'ID_JABATAN' => $request->idjabatan,
            'ID_KOTA' => $request->idkota,
            'NAMA_PEGAWAI' => $request->namapegawai,
            'JK_PEGAWAI' => $request->jkpegawai,
            'TELP_PEGAWAI' => $request->telppegawai,
            'ALAMAT' => $request->alamat,
            'USERNAME' => $request->username,
            'PASSWORD' => $request->password
           // 'STATUS_PEGAWAI' => $request->statuspegawai  

        ]);
   
        // dialihkan ke halam index
    return redirect('login');
}
    }

