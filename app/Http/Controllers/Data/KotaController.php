<?php

namespace App\Http\Controllers\Data;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;

class KotaController extends Controller
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
        $kota=DB::table('kota')->get();
         
       return view('Kota/index_kota', ['kota' => $kota]);
        }
    
    }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        
        return view('Kota/create_kota')->with('success', 'Data Berhasil Ditambahkan');
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('kota')->insert([
            'NAMA_KOTA' => $request->namakota
        ]);
   

    return redirect('KotaIndex')->with('success', 'Data Berhasil Ditambahkan');
 
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
        $kota = DB::table('kota')
        ->where('ID_KOTA',$id)
        ->get();
        return view('Kota/edit_kota', ['kota' => $kota]);
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
         DB::table('kota')
        ->where('ID_KOTA', $request->idkota)
        ->update([
            'NAMA_KOTA' => $request->namakota
        ]);
        
        //
        return redirect('KotaIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kota')
        ->where('ID_KOTA', $id)
        ->delete();
       return redirect('KotaIndex')->with('success', 'Data Berhasil Ditambahkan');
        
    }
}
