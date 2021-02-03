<?php

namespace App\Http\Controllers\Data;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Pegawai;

class MerkController extends Controller
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
         $merk=DB::table('merk')->get();
         // $merk = merk::all();
       return view('Merk/index_merk', ['merk' => $merk]);
        }
    
    }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        // $merk=DB::table('merk')->get();
        return view('Merk/create_merk')->with('success', 'Data Berhasil Ditambahkan');
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('merk')->insert([
          //  'ID_MERK' => $request->idmerk,
            'NAMA_MERK' => $request->namamerk
        ]);
   

    return redirect('MerkIndex')->with('success', 'Data Berhasil Ditambahkan');
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
        $merk = DB::table('merk')
        ->where('ID_MERK',$id)
        ->get();
        return view('Merk/edit_merk', ['merk' => $merk]);
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
         DB::table('merk')
        ->where('ID_MERK', $request->idmerk)
        ->update([
          //  'ID_MERK', $request->idmerk,
            'NAMA_MERK' => $request->namamerk
        ]);
        
        //
        return redirect('MerkIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('merk')
        ->where('ID_MERK', $id)
        ->delete();
       return redirect('MerkIndex')->with('success', 'Data Berhasil Ditambahkan');
        
    }
}
