@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                


<div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="progress-box progress-1">
              <div class="row form-group">
                <div class="col col-md-4"><label for="text-input" class=" form-control-label">Nama Pegawai :</label>
                {{ $penyewaan->NAMA_PEGAWAI }}</div>
              </div>
            </div>

<div class="progress-box progress-2">
<div class="row form-group">
<div class="col col-md-"><label for="text-input" class=" form-control-label">Nama Customer :</label>{{ $penyewaan->NAMA_CUSTOMER }}</div>

</div>
</div>


</div> 
</div>
</div>





<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="product-status-wrap">
<table class="table table-bordered">
<thead class="thead-steelblue" >
    <tr bgcolor="#3399CC">

    <th scope="col"><font color="white">ID</font></th>
      <th scope="col"><font color="white">Nama Mobil</font></th>
      <th scope="col"><font color="white">Jaminan</font></th>
      <th scope="col"><font color="white">Nama Paket</font></th>
      <th scope="col"><font color="white">Lama Sewa</font></th>
      <th scope="col"><font color="white">Tanggal Sewa</font></th>
      <th scope="col"><font color="white">Tanggal kembali</font></th>
      <th scope="col"><font color="white">Harga Sewa</font></th>
      <th scope="col"><font color="white">Total Penyewaan</font></th>
      <th scope="col"><font color="white">Total Bayar</font></th>
    </tr>
</thead>
<tbody>
       @foreach($detil_penyewaan as $detil_penyewaan)
        <td>{{ $penyewaan->ID_SEWA }}</td>
        <td>{{ $detil_penyewaan-> NAMA_MOBIL }}</td>
        <td>{{ $detil_jaminan->JENIS_JAMINAN }}</td>
        <td>{{ $detil_penyewaan->JENIS_PAKET }}</td>
        <td>{{ $detil_penyewaan->LAMA_SEWA }} Hari</td>
        <td>{{ $penyewaan->TGL_SEWA }}</td>
        <td>{{ $penyewaan->TGL_HARUSKEMBALI }}</td>
        <td>{{ $detil_penyewaan->HARGA_SEWA }}</td>
        <td>{{ $penyewaan->TOTAL_PENYEWAAN }}</td>
        <td>{{ $penyewaan->TOTAL_BAYAR }}</td>
      @endforeach
       
</tbody>
</table>
  <br>

<h4><b>Sisa Pembayaran : Rp. {{ $penyewaan->SISA_BAYAR}}</b></h4>
</div>
</div>
</div>
</div>
</div>

          
@endsection