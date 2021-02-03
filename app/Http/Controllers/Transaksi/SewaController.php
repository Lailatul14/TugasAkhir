<?php

namespace App\Http\Controllers\Transaksi;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Sales;
use App\User;
use PDF;

class SewaController extends Controller
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
        $penyewaan=DB::table('penyewaan')->get();
       // dump($user);
        return view("Detil_Sewa/index",['penyewaan' => $penyewaan, 'pegawai' => $pegawai, 'customer' => $customer, 'mobil' => $mobil, 'paket' => $paket, 'detil_paket' => $detil_paket, 'jaminan' => $jaminan]);
        //
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //return view("Transaksi/Sales/create");
        //
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
        
       
        return redirect('DetilSewa_Index');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */

    // public function edit($id)
    // {
    //     $sales=DB::table('sales')
    //    ->where('NOTA_ID', $id)
    //    ->first();
    //     //
    //    return view("Transaksi/Sales/edit",['sales'=>$sales]);
    //     //
    // }
    

     
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request)
    // {
    //      DB::table('sales')
    //         ->where('NOTA_ID', $request->notaid)
    //         ->update([ 
    //         'NOTA ID'=> $request->notaid,
    //         'USER ID'  => $request->userid,
    //         'CUSTOMER ID' => $request->customerid,
    //         'NOTA DATE' => $request->notadate,
    //         'TOTAL_PAYMENT' => $request->totalpayment,

    //         ]);  
  
    //         return redirect('salesIndex');
    // }
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy()
    // {
         
    //     //
    // }
    
    //  public function cetak_pdf($id)
    //  {
    //      $user=DB::table('user')->get();
    //      $customer=DB::table('customer')->get();
    //      $categories=DB::table('categories')->get();
    //      $product=DB::table('product')->get();
    //      $sales=DB::table('sales')->get();
    //      $det=DB::table('sales_detail')->get();
    //      $NOTA_ID = $id;
         
    //      $pdf = PDF::loadview('Transaksi/Sales/invoice_pdf',
    //         ['id'=>$NOTA_ID, 
    //         'sales'=>$sales,
    //         'sales_detail'=>$det, 
    //         'product'=>$product, 
    //         'user'=>$user, 
    //         'customer'=>$customer
    //     ])->setPaper('a4');
    //      return $pdf->stream('invoice-pdf');
    //  }
     
}
