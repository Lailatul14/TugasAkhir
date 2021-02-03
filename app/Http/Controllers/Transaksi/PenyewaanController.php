<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
        $customer = DB::table('customer')->get();
        $mobil = DB::table('mobil')->get();
        $paket = DB::table('paket')->get();
        $jaminan = DB::table('jaminan')->get();
        $detil_paket = DB::table('detil_paket')->get();
        $penyewaan = DB::table('penyewaan')->get();
       return view('Penyewaan/index_penyewaan', ['penyewaan' => $penyewaan, 'pegawai' => $pegawai, 'customer' => $customer, 'mobil' => $mobil, 'paket' => $paket, 'detil_paket' => $detil_paket, 'jaminan' => $jaminan]);
       
        
        //
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        // $customer=DB::table('customer')->get();
        // $mobil=DB::table('mobil')->get();
        // $paket=DB::table('paket')->get();
        // $setil_paket=DB::table('detil_paket')->get();
        // if(!Session::get('login')){
        //     return redirect('login');
        // }
        // else{
        // return view('Transaksi/POS/index',[
        //     'NOTA_ID'=>$NOTA_ID,
        //     'user'=>$user,
        //     'customer'=>$customer,
        //     'product'=>$product]);
        return view('Trasaksi/create_penyewaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('penyewaan')->insert([
            'ID_CUSTOMER'  => $request->idcustomer,
            'ID_PEGAWAI' => $request->idpegawai,
            'TGL_SEWA' => $request->tglsewa,
            'TGL_HARUSKEMBALI' => $request->tglharuskembali,
            'TOTAL_BAYAR'   => $request->totalbayar,
            'TOTAL_PENYEWAAN'   => $request->totalpayment,
            'SISA_BAYAR'  => $request->sisabayar,
            // 'STATUS_SEWA'  => 0,
            'TIPE_PEMBAYARAN' => $request->tipepembayaran
        ]);
        
          $ID_SEWA =(DB::table('penyewaan')->max('ID_SEWA'));
            foreach ($request['id'] as $key) {
            DB::table('detil_penyewaan')->insert([
            'ID_SEWA'  => $ID_SEWA,
            'ID_MOBIL'  => $request['idmobil'][$key],
            'ID_PAKET'  => $key,
            'LAMA_SEWA' => $request['qty'][$key],
            'HARGA_SEWA'=> $request['harga'][$key],
            'DP'=> $request['discount'][$key],
            'SUB_TOTAL'=> $request['subtotal'][$key]
     
            ]);
            }

            DB::table('detil_jaminan')->insert([
            'ID_SEWA'  => $ID_SEWA,
            'ID_JAMINAN'  => $request->idjaminan,
            'IDENTITAS_JAMINAN' => $request->nomor

            ]);
            
            return redirect('PenyewaanIndex')->with('success', 'Penyewaan Berhasil ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $penyewaan=DB::table('penyewaan')
        ->join('customer','penyewaan.ID_CUSTOMER','=','customer.ID_CUSTOMER')
        ->join('pegawai','penyewaan.ID_PEGAWAI','=','pegawai.ID_PEGAWAI')
        ->select('penyewaan.*','customer.NAMA_CUSTOMER','pegawai.NAMA_PEGAWAI')
       ->where('ID_SEWA', $id)
       ->first();

        $detil_jaminan=DB::table('detil_jaminan')
        ->join('jaminan','detil_jaminan.ID_JAMINAN','=','jaminan.ID_JAMINAN')
        ->select('detil_jaminan.*','jaminan.JENIS_JAMINAN')
       ->where('ID_SEWA', $id)
       ->first();

       $detil_penyewaan=DB::table('detil_penyewaan')
        // ->join('mobil','detil_penyewaan.ID_MOBIL','=','mobil.ID_MOBIL')
        ->join('paket','detil_penyewaan.ID_PAKET','=','paket.ID_PAKET')
        ->select('detil_penyewaan.*', 'paket.JENIS_PAKET')
       ->where('ID_SEWA', $id)
       ->first();


       //  $salesdetail=DB::table('sales_detail')
       //  ->join('product','sales_detail.PRODUCT_ID','=','product.PRODUCT_ID')
       //  ->select('sales_detail.*','product.PRODUCT_NAME')
       // ->where('NOTA_ID', $id)
       // ->get();
        //
       return view("Detil_Sewa/invoice_sewa",['detil_penyewaan'=>$detil_penyewaan, 'penyewaan'=>$penyewaan, 'detil_jaminan'=>$detil_jaminan]);
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $sales=DB::table('sales')
    //    ->where('NOTA_ID', $id)
    //    ->first();
    //     $salesdetail=DB::table('sales_detail')
    //     ->join('product','sales_detail.PRODUCT_ID','=','product.PRODUCT_ID')
    //     ->select('sales_detail.*','product.PRODUCT_NAME')
    //    ->where('NOTA_ID', $id)
    //    ->get();

    //    $customer=DB::table('customer')
    //    ->get();

    //    $user=DB::table('user')
    //    ->get();

    //    $product=DB::table('product')
    //    ->get();
    //     //
    //    return view("Transaksi/POS/update",['product'=> $product, 'sales'=>$sales, 'sales_detail'=>$salesdetail, 'customer'=>$customer, 'user'=>$user]);
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
    //  DB::table('sales')->where('NOTA_ID',$request->notaid)
    //     ->update([
    //         'NOTA_ID'   => $request->notaid,
    //         'USER_ID'  => $request->userid,
    //         'CUSTOMER_ID' => $request->customerid,
    //         'NOTA_DATE' => $request->notadate,
    //         'TOTAL_PAYMENT' => $request->totalpayment
    //     ]);
    //     DB::table('sales_detail')->where('NOTA_ID', $request->notaid)->delete();

    //         foreach ($request['id'] as $key) {
    //         DB::table('sales_detail')->insert([
    //         'NOTA_ID'   => $request['notaid'],
    //         'PRODUCT_ID'  => $key,
    //         'QUANTITY' => $request['qty'][$key],
    //         'SELLING_PRICE'=> $request['harga'][$key],
    //         'DISCOUNT'=> $request['discount'][$key],
    //         'TOTAL_PRICE'=> $request['subtotal'][$key]
    //         ]);
    //         }

    //         return redirect('salesIndex');
    // }
DB::table('penyewaan')->insert([
            'ID_CUSTOMER'  => $request->idcustomer,
            'ID_PEGAWAI' => $request->idpegawai,
            'TGL_SEWA' => $request->tglsewa,
            'TGL_HARUSKEMBALI' => $request->tglharuskembali,
            'TOTAL_BAYAR'   => $request->totalbayar,
            'TOTAL_PENYEWAAN'   => $request->totalpayment,
            'SISA_BAYAR'  => $request->sisabayar,
            // 'STATUS_SEWA'  => 0,
            'TIPE_PEMBAYARAN' => $request->tipepembayaran
        ]);
        
          $ID_SEWA =(DB::table('penyewaan')->max('ID_SEWA'));
            foreach ($request['id'] as $key) {
            DB::table('detil_penyewaan')->insert([
            'ID_SEWA'  => $ID_SEWA,
            'ID_MOBIL'  => $request['idmobil'][$key],
            'ID_PAKET'  => $key,
            'LAMA_SEWA' => $request['qty'][$key],
            'HARGA_SEWA'=> $request['harga'][$key],
            'DP'=> $request['discount'][$key],
            'SUB_TOTAL'=> $request['subtotal'][$key]
     
            ]);
            }

            DB::table('detil_jaminan')->insert([
            'ID_SEWA'  => $ID_SEWA,
            'ID_JAMINAN'  => $request->idjaminan,
            'IDENTITAS_JAMINAN' => $request->nomor

            ]);
            
            return redirect('PenyewaanIndex')->with('success', 'Penyewaan Berhasil ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        return view ('Transaksi/POS/destroy');
        //
    }
}