@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Input Data Kota</strong></div>
<div class="card-body card-block">
<form action="KotaStore" method="post" enctype="multipart/form-data" class="form-horizontal">
	{{ @csrf_field() }}
<div class="row form-group">
     
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kota</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="namakota" name="namakota" placeholder="Nama Kota" class="form-control"></div>
</div>

<center>
<a href="KotaIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="KotaIndex" id="btn-cancel"><button type="button" class="btn btn-danger">Batal</button></a>
</center>
</form>
</div>
</div>
</div>


@endsection