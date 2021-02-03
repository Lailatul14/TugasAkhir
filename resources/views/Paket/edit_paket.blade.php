@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Input Harga Paket Sewa</strong></div>
<div class="card-body card-block">
@foreach($paket as $pk)
<form action="PaketUpdate" method="POST" class="form-horizontal">
	{{ @csrf_field() }}

<div class="row form-group">   
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Paket</label></div>
<div class="col-12 col-md-9"><input readonly="" type="text" id="idpaket" name="idpaket" class="form-control" value=" {{ $pk->ID_PAKET}}"></div>
</div>

<div class="row form-group">   
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Paket</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="jenispaket" name="jenispaket" class="form-control" value=" {{ $pk->JENIS_PAKET}}"></div>
</div>

<div class="row form-group">   
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Harga Sewa</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="hargapaket" name="hargapaket" class="form-control" value=" {{ $pk->HARGA_PAKET}}"></div>
</div>

<center>
<a href="PaketIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="PaketIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center></form>
@endforeach
</div>
</div>
</div>


@endsection