<?php

namespace App\Http\Controllers\Data;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;

class CustomerController extends Controller
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
       $kota = DB::table('kota')->get();
        $customer = DB::table('customer')->get();
       return view('Customer/index_customer', ['customer' => $customer, 'kota' => $kota ]);
          }
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = (DB::table('customer')->count('ID_CUSTOMER'))+1;
        
        $user_id = "CUS".str_pad($id,6,"0",STR_PAD_LEFT);
       $kota = DB::table('kota')->pluck("NAMA_KOTA","ID_KOTA");
        return view('Customer/create_customer',compact('kota'))->with('success', 'Data Berhasil Ditambahkan');
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
        if($request->hasFile('file')){
            $file = $request->file('file');
            $identitascustomer = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'foto_idetitas';
            $file->move($tujuan_upload,$identitascustomer);
        }
        DB::table('customer')->insert([
            'ID_CUSTOMER' => $request->idcustomer,
            'ID_KOTA' => $request->idkota,
            'NAMA_CUSTOMER' => $request->namacustomer,
            'JK_CUSTOMER' => $request->jkcustomer,
            'TELP_CUSTOMER' => $request->telpcustomer,
            'ALAMAT_CUSTOMER' => $request->alamatcustomer,
            'IDENTITAS_CUSTOMER' => $request->identitascustomer
        ]);
   
        // dialihkan ke halam index
    return redirect('CustomerIndex')->with('success', 'Data Berhasil Ditambahkan');
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
         $customer = DB::table('customer')
         ->where('ID_CUSTOMER',$id)
         ->get();
         $kota = DB::table('kota')
         ->get();
        

       // passing data user yang didapat ke view edit.blade.php
        return view('Customer/edit_customer', ['customer' => $customer, 'kota' => $kota]);
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
        
       Db::table('customer')
        ->where('ID_CUSTOMER', $request->idcustomer)
        ->update([

            'ID_KOTA' => $request->idkota,
            'NAMA_CUSTOMER' => $request->namacustomer,
            'JK_CUSTOMER' => $request->jkcustomer,
            'TELP_CUSTOMER' => $request->telpcustomer,
            'ALAMAT_CUSTOMER' => $request->alamatcustomer,
            'IDENTITAS_CUSTOMER' => $request->identitascustomer
     

        ]);
   
    // mengalihkan ke halaman userindex
    return redirect('CustomerIndex');
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
          DB::table('customer')
         ->where('ID_CUSTOMER', $id)
         ->delete();

         // alihkan halaman ke halaman userindex
       return redirect('CustomerIndex')->with('success', 'Data Berhasil Ditambahkan');
        
    }
}
