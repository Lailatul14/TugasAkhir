@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Edit Data Kota</strong></div>

                                            
<div class="card-body card-block">
@foreach($kota as $k)
<form action="KotaUpdate" method="POST" class="form-horizontal">
	{{ @csrf_field() }}
<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Kota</label></div>
<div class="col-12 col-md-9">
	<input required="" readonly="" type="id" id="idkota" name="idkota" placeholder="Nama Kota" class="form-control"  value=" {{ $k->ID_KOTA }}">
</div>
<br>
<br>
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kota</label></div>
<div class="col-12 col-md-9">
	<input required="" type="text-input" id="namakota" name="namakota" placeholder="Nama Kota" class="form-control"  value=" {{ $k->NAMA_KOTA }}">
</div>
</div>

<center>
<button type="submit" class="btn btn-info">Simpan</button>

<a href="KotaIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>

</form>
@endforeach
</div>

</div>
</div>


@endsection