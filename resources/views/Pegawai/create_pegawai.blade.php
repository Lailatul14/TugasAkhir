@extends('tampilan/index')
@section('konten')

<div class="col-lg-12">
<div class="card">
<div class="card-header">
 <strong class="card-title">Tambah Pegawai</strong>
</div>
<div class="card-body card-block">
<form action="PegawaiStore" method="POST" enctype="multipart/form-data" class="form-horizontal">
  
	{{ csrf_field() }}

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Nama Jabatan</label></div>
        <div class="col-12 col-md-9">
          <select id="namajabatan" class="form-control pl-0 form-control-line" name="idjabatan">
            <option disabled selected style="padding: 10px">Pilih Nama Jabatan</option>
              @foreach($jabatan as $key => $value)
            <option value="{{ $key }}">{{ $value }}
            </option>
              @endforeach
          </select>  
        </div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
<div class="col-12 col-md-9"><input required="" type="text" required="" id="namapegawai" name="namapegawai" placeholder="Masukkan nama Pegawai" class="form-control"></div>
</div>

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
        <div class="col-12 col-md-9">
          <select name="jkpegawai" id="jkpegawai" class="form-control pro-edt-select form-control-primary">
            <option disabled="" selected="">Pilih Jenis Kelamin</option> 
                <option  value="1">Pria</option>
                <option  value="0">Wanita</option>
                </select>
        </div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telpon</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="telppegawai" name="telppegawai" placeholder="Masukkan nomor telpon" class="form-control"></div>
</div>

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Nama Kota</label></div>
        <div class="col-12 col-md-9">
          <select class="form-control pl-0 form-control-line" name="idkota">
            <option disabled selected style="padding: 10px">Pilih Nama Kota</option>
              @foreach($kota as $key => $value)
            <option value="{{ $key }}">{{ $value }}
            </option>
              @endforeach
          </select>  
        </div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="alamat" name="alamat" placeholder=" Masukkan alamat" class="form-control"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="username" name="username" placeholder="Masukkan username" class="form-control"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
<div class="col-12 col-md-9"><input  required="" type="text" id="password" name="password" placeholder="Masukkan password" class="form-control"></div>
</div>


<!-- <div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Pegawai</label></div>
<div class="col-12 col-md-9">
<select name="statuspegawai" id="statuspegawai" class="form-control">
<option disabled="" selected="">Pilih Status Pegawai</option> 
    <option  value="1">Active</option>
    <option  value="0">Non-active</option>
</select>
</div>
</div>
 -->
<center>
<a href="PegawaiIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="PegawaiIndex" id="btn-cancel"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
</div>
</div>
</div>


@endsection