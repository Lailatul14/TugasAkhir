<?php

namespace App\Http\Controllers\Data;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;

class PaketController extends Controller
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
         $paket=DB::table('paket')->get();
       return view('Paket/index_paket', ['paket' => $paket]);
        }
    
    }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        return view('Paket/create_paket')->with('success', 'Data Berhasil Ditambahkan');
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('paket')->insert([
           
            'JENIS_PAKET' => $request->jenispaket,
            'HARGA_PAKET' => $request->hargapaket
        ]);
   

    return redirect('PaketIndex')->with('success', 'Data Berhasil Ditambahkan');
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
    public function edit($id)
    {
        $paket = DB::table('paket')
        ->where('ID_PAKET',$id)
        ->get();
        return view('Paket/edit_paket', ['paket' => $paket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         DB::table('paket')
        ->where('ID_PAKET', $request->idpaket)
        ->update([
            'JENIS_PAKET' => $request->jenispaket,
            'HARGA_PAKET' => $request->hargapaket
        ]);
        
        //
        return redirect('PaketIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('paket')
        ->where('ID_PAKET', $id)
        ->delete();
       return redirect('PaketIndex')->with('success', 'Data Berhasil Ditambahkan');
        
    }
}
