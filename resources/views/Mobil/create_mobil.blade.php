@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header">
 <strong class="card-title">Tambah Mobil</strong>
</div>
<div class="card-body card-block">

<form action="MobilStore" method="POST" class="form-horizontal">
	{{ @csrf_field() }}


<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label"> Merk</label></div>
        <div class="col-12 col-md-9">
          <select id="idmerk" class="form-control pl-0 form-control-line" name="idmerk">
            <option disabled selected style="padding: 10px">Pilih Merk</option>
              @foreach($merk as $key => $value)
            <option value="{{ $key }}">{{ $value }}
            </option>
              @endforeach
          </select>  
        </div>
</div>


<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Mobil</label></div>
<div class="col-12 col-md-9"><input required="" type="text" required="" id="namamobil" name="namamobil" class="form-control"  placeholder="Masukkan merk"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Mobil</label></div>
<div class="col-12 col-md-9">
<select name="jenismobil" id="jenismobil" class="form-control">
<option disabled="" selected="">Pilih Jenis Mobil</option> 
    <option  value="1">Manual</option>
    <option  value="0">Matic</option>
</select>
</div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Warna Mobil</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="warnamobil" name="warnamobil" class="form-control" placeholder="Masukkan  warna Mobil"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Polisi</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="platnomor" name="platnomor" class="form-control"  placeholder="Masukkan nomor Polisi"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Beli</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="tahunbeli" name="tahunbeli" class="form-control"  placeholder="Masukkan tahub beli"></div>
</div>



<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Mobil</label></div>
<div class="col-12 col-md-9">
<select name="statusmobil" id="statusmobil" class="form-control">
<option disabled="" selected="">Pilih Status Mobil</option> 
    <option  value="1">Tersedia</option>
    <option  value="0">Disewa</option>
</select>
</div>
</div>

<center>
<a href="MobilIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="MobilIndex" id="btn-cancel"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>

</div>
</div>
</div>



@endsection