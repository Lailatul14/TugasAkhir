@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Edit Data Merk</strong></div>

                                            
<div class="card-body card-block">
@foreach($merk as $m)
<form action="MerkUpdate" method="POST" class="form-horizontal">
	{{ @csrf_field() }}
<div class="row form-group">
	<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Merk</label></div>
<div class="col-12 col-md-9">
	<input readonly="" required="" type="id" id="idmerk" name="idmerk" placeholder="Nama Merk" class="form-control"  value=" {{ $m->ID_MERK }}">
</div>
<br>
<br>
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Merk</label></div>
<div class="col-12 col-md-9">
	<input required="required" type="text-input" id="namamerk" name="namamerk" placeholder="Nama Merk" class="form-control"  value=" {{ $m->NAMA_MERK }}">
</div>
</div>

<center>
<button type="submit" class="btn btn-info">Simpan</button>

<a href="MerkIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>

</form>
@endforeach
</div>

</div>
</div>


@endsection