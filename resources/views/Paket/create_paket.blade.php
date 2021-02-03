@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Input Paket Sewa</strong></div>
<div class="card-body card-block">
<form action="PaketStore" method="post" enctype="multipart/form-data" class="form-horizontal">
	{{ @csrf_field() }}
<div class="row form-group">   
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Paket</label></div>
<div class="col-12 col-md-9"><input type="text" id="jenispaket" name="jenispaket" placeholder="Masukkan Jenis Sewa" class="form-control"></div>
</div>

<div class="row form-group">   
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Harga Paket</label></div>
<div class="col-12 col-md-9"><input type="text" id="hargapaket" name="hargapaket"placeholder="Masukkan Harga Paket"  class="form-control"></div>
</div>

<center>
<a href="PaketIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="PaketIndex" id="btn-cancel"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
</div>
</div>
</div>


@endsection