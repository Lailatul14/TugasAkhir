<?php

namespace App\Http\Controllers\Transaksi;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



class DaftarPenyewaanController extends Controller
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
        $customer = DB::table('customer')->get();
        $penyewaan = DB::table('penyewaan')->get();
        return view('DaftarSewa/index_daftarsewa', ['penyewaan' => $penyewaan, 'customer' => $customer]);
          }
          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $jabatan = DB::table('jabatan')->pluck("NAMA_JABATAN","ID_JABATAN");
    //      $kota = DB::table('kota')->pluck("NAMA_KOTA","ID_KOTA");
    //     return view('Pegawai/create_pegawai',compact('kota', 'jabatan'))->with('success', 'Data Berhasil Ditambahkan');
    // }

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
        DB::table('penyewaan')->insert([
            'ID_SEWA' => $request->idsewa,
            'ID_CUSTOMER' => $request->idcustomer,
            'TGL_SEWA' => $request->tglsewa,
            'STATUS_PENYEWAAN' => $request->statuspenyewaan
            

        ]);
   
        // dialihkan ke halam index
    return redirect('DaftarSewaIndex')->with('success', 'Data Berhasil Ditambahkan');
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
         $penyewaan = DB::table('penyewaan')
         ->where('ID_SEWA',$id)
         ->get();
         $customer = DB::table('customer')
         ->get();
     

       // passing data user yang didapat ke view edit.blade.php
        return view('DaftarSewa/edit_daftarsewa', ['penyewaan' => $penyewaan, 'customer' => $customer]);
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
        
       Db::table('penyewaan')
        ->where('ID_SEWA', $request->idsewa)
        ->update([
            'ID_CUSTOMER' => $request->idcustomer,
            'TGL_SEWA' => $request->tglsewa,
            'STATUS_PENYEWAAN' => $request->statuspenyewaan       

        ]);
   
    // mengalihkan ke halaman userindex
    return redirect('DaftarSewaIndex');
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
