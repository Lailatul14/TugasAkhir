@extends('tampilan/index')
@section('konten')

<div class="col-lg-12">
<div class="card">
<div class="card-header">
<strong class="card-title">Invoice</strong>
</div>

<div class="card-body">
  <h4><div class="fa fa-user"> PEGAWAI  : Heri</b> </h4>
  <h4><div class="fa fa-user" >CUSTOMER  : Lisa </h4>
  <br>
<table class="table table-bordered">
<thead class="thead-steelblue" >
    <tr bgcolor="#3399CC">

    <th scope="col"><font color="white">ID</font></th>
      <th scope="col"><font color="white">Jaminan</font></th>
      <th scope="col"><font color="white">Nama Mobil</font></th>
      <th scope="col"><font color="white">Nama Paket</font></th>
      <th scope="col"><font color="white">Lama Sewa</font></th>
      <th scope="col"><font color="white">Tanggal Sewa</font></th>
      <th scope="col"><font color="white">Tanggal kembali</font></th>
      <th scope="col"><font color="white">Total Penyewaan</font></th>
      <th scope="col"><font color="white">Total Bayar</font></th>
</tr>
</thead>
<tbody>
<tr>
<td>SW00003</td>    
        <td>STNK</td>
        <td>Mobilio</td>    
        <td>Manual</td>
        <td>2</td>    
        <td>2021-01-23</td>
        <td>2021-01-25</td>
        <td>1000000</td>
        <td>400000</td>  
</tr>

</tbody>
</table>

<h4><b> Sisa Bayar : Rp. 600000</b> </h4>
</div>
</div>
</div>
 


@endsection