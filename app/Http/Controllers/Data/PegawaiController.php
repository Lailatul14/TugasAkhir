<?php

namespace App\Http\Controllers\Data;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;
use App\jabatan;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!Session::get('login')){
        //     return redirect('login');
        // }
        // else{
        //$product = DB::table('product')->get();
       //$pegawai = pegawai::all();
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
        $pegawai = DB::table('pegawai')->get();
        $jabatan = DB::table('jabatan')->get();
        $kota = DB::table('kota')->get();
       return view('Pegawai/index_pegawai', ['pegawai' => $pegawai, 'jabatan' => $jabatan, 'kota' => $kota ]);
          }
          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = DB::table('jabatan')->pluck("NAMA_JABATAN","ID_JABATAN");
         $kota = DB::table('kota')->pluck("NAMA_KOTA","ID_KOTA");
        return view('Pegawai/create_pegawai',compact('kota', 'jabatan'))->with('success', 'Data Berhasil Ditambahkan');
    }

        // $jabatan = DB::table('jabatan')->get();
        // $kota = DB::table('kota')->get();
        // $pegawai = DB::table('pegawai')
        //             ->join('jabatan', 'pegawai.ID_JABATAN', '=', 'jabatan.ID_JABATAN')
        //             ->join('kota', 'pegawai.ID_KOTA', '=', 'kota.ID_KOTA')
        //             ->select('pegawai.ID_PEGAWAI', 'jabatan.NAMA_JABATAN' , 'kota.NAMA_KOTA')
        //             ->get();
    
   
            //tampilkan view barang dan kirim datanya ke view tersebut
        //     return view('barang')->with('data', $data);
        // }
       
    //      return view('Pegawai/create_pegawai', ['pegawai' => $pegawai ]);
        
    // }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Method untuk insert data ke tabel user 
    public function store(Request $request)
    {
        //insert data ke tabel user
        //DB::table('user')->insert([
        DB::table('pegawai')->insert([
            'ID_JABATAN' => $request->idjabatan,
            'ID_KOTA' => $request->idkota,
            'NAMA_PEGAWAI' => $request->namapegawai,
            'JK_PEGAWAI' => $request->jkpegawai,
            'TELP_PEGAWAI' => $request->telppegawai,
            'ALAMAT' => $request->alamat,
            'USERNAME' => $request->username,
            'PASSWORD' => $request->password
            

        ]);
   
        // dialihkan ke halam index
    return redirect('PegawaiIndex')->with('success', 'Data Berhasil Ditambahkan');
}
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // method untuk edit data user
    public function edit($id)
    {
        // mengambil data user berdasarkan id yang dipilih
       // $user = DB::table('user')
       //->where('USER_ID', $id)->get();
         $pegawai = DB::table('pegawai')
         ->where('ID_PEGAWAI',$id)
         ->get();
         $jabatan = DB::table('jabatan')
         ->get();
         $kota = DB::table('kota')
         ->get();

       // passing data user yang didapat ke view edit.blade.php
        return view('Pegawai/edit_pegawai', ['pegawai' => $pegawai, 'jabatan' => $jabatan, 'kota' => $kota]);
        // $merk = DB::table('merk')
        // ->where('ID_MERK',$id)
        // ->get();
        // return view('Merk/edit_merk', ['merk' => $merk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //update data user
    public function update(Request $request)
    {
        
       Db::table('pegawai')
        ->where('ID_PEGAWAI', $request->idpegawai)
        ->update([

            'ID_JABATAN' => $request->idjabatan,
            'ID_KOTA' => $request->idkota,
            'NAMA_PEGAWAI' => $request->namapegawai,
            'JK_PEGAWAI' => $request->jkpegawai,
            'TELP_PEGAWAI' => $request->telppegawai,
            'ALAMAT' => $request->alamat,
            'USERNAME' => $request->username,
            'PASSWORD' => $request->password,
            'STATUS_PEGAWAI' => $request->statuspegawai        

        ]);
   
    // mengalihkan ke halaman userindex
    return redirect('PegawaiIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //untuk menghapus data user
    public function destroy($id)
    {

    // menghapus data user berdasarkan id yang dipilih
          DB::table('pegawai')
         ->where('ID_PEGAWAI', $id)
         ->delete();

         // alihkan halaman ke halaman userindex
       return redirect('PegawaiIndex')->with('success', 'Data Berhasil Ditambahkan');
        
    }
}
