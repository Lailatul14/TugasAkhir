<?php

namespace App\Http\Controllers\Data;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
       $merk = DB::table('merk')->get();
        $mobil = DB::table('mobil')->get();
       return view('Mobil/index_mobil', ['mobil' => $mobil, 'merk' => $merk]);
          }
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = DB::table('merk')->pluck("NAMA_MERK","ID_MERK");
        return view('Mobil/create_mobil',compact('merk'))->with('success', 'Data Berhasil Ditambahkan');
    }

        
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
        DB::table('mobil')->insert([
            'ID_MOBIL' => $request->idmobil,
            'ID_MERK' => $request->idmerk,
            'NAMA_MOBIL' => $request->namamobil,
            'JENIS_MOBIL' => $request->jenismobil,
            'WARNA_MOBIL' => $request->warnamobil,
            'PLAT_NOMOR' => $request->platnomor,
            'TAHUN_BELI' => $request->tahunbeli,
            'STATUS_MOBIL' => $request->statusmobil

        ]);
   
        // dialihkan ke halam index
    return redirect('MobilIndex')->with('success', 'Data Berhasil Ditambahkan');
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
         $mobil = DB::table('mobil')
         ->where('ID_MOBIL',$id)
         ->get();
         $merk = DB::table('merk')
         ->get();
        

       // passing data user yang didapat ke view edit.blade.php
        return view('Mobil/edit_mobil', ['mobil' => $mobil, 'merk' => $merk]);
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
        
       Db::table('mobil')
        ->where('ID_MOBIL', $request->idmobil)
        ->update([

            'ID_MERK' => $request->idmerk,
            'NAMA_MOBIL' => $request->namamobil,
            'JENIS_MOBIL' => $request->jenismobil,
            'WARNA_MOBIL' => $request->warnamobil,
            'PLAT_NOMOR' => $request->platnomor,
            'TAHUN_BELI' => $request->tahunbeli,
            'STATUS_MOBIL' => $request->statusmobil
     

        ]);
   
    // mengalihkan ke halaman userindex
    return redirect('MobilIndex');
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
          DB::table('mobil')
         ->where('ID_MOBIL', $id)
         ->delete();

         // alihkan halaman ke halaman userindex
       return redirect('MobilIndex')->with('success', 'Data Berhasil Ditambahkan');
        
    }
}
