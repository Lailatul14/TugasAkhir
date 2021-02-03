@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Input Data Merk</strong></div>
<div class="card-body card-block">
<form action="MerkStore" method="post" enctype="multipart/form-data" class="form-horizontal">
	{{ @csrf_field() }}
<div class="row form-group">
     
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Merk</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="namamerk" name="namamerk" placeholder="Nama Merk" class="form-control"></div>
</div>

<center>
<a href="MerkIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="MerkIndex" id="btn-cancel"><button type="button" class="btn btn-danger">Batal</button></a>
</center>
</form>
</div>
</div>
</div>


@endsection