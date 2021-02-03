@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header">
 <strong class="card-title">Tambah Pegawai</strong>
</div>
<div class="card-body card-block">
@foreach($pegawai as $p)
<form action="PegawaiUpdate" method="POST" class="form-horizontal">
	{{ @csrf_field() }}

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Pegawai</label></div>
<div class="col-12 col-md-9"><input type="text" readonly="" id="idpegawai" name="idpegawai" placeholder="Masukkan nama merk" class="form-control" value=" {{ $p->ID_PEGAWAI}}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Jabatan</label></div>
                                        <div class="col-12 col-md-9">
                                        <select class="form-control pl-0 form-control-line" id="idjabatan" name="idjabatan">
                                            
                                          @foreach($jabatan as $j) 
                                          <option value=" {{ $j->ID_JABATAN}}" selected>
                                            {{ $j->NAMA_JABATAN}}
                                          </option>
                                          @endforeach
                                            </select>  
                                        </div>
                                      </div>
<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Kota</label></div>
                                        <div class="col-12 col-md-9">
                                        <select class="form-control pl-0 form-control-line" id="idkota" name="idkota">
                                            
                                          @foreach($kota as $k) 
                                          <option value=" {{ $k->ID_KOTA}}" selected>
                                            {{ $k->NAMA_KOTA}}
                                          </option>
                                          @endforeach
                                            </select>  
                                        </div>
                                      </div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
<div class="col-12 col-md-9"><input required="" type="text" required="" id="namapegawai" name="namapegawai" placeholder="Masukkan nama merk" class="form-control" value=" {{ $p->NAMA_PEGAWAI }}"></div>
</div>

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
        <div class="col-12 col-md-9">
          <select name="jkpegawai" id="jkpegawai" class="form-control pro-edt-select form-control-primary">
          	@if($p->JK_PEGAWAI == 0)
                <option  selected value="1">Pria</option>
                <option selected value="0">Wanita</option>
                @else
                <option value="1">Pria</option>
                <option value="0">Wanita</option>
                @endif
                </select>
        </div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telpon</label></div>
<div class="col-12 col-md-9"><input type="text" id="telppegawai" name="telppegawai" placeholder="Masukkan nomor telpon" class="form-control" value=" {{ $p->TELP_PEGAWAI }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="alamat" name="alamat" placeholder=" Masukkan alamat" class="form-control" value=" {{ $p->ALAMAT }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="username" name="username" placeholder="Masukkan username" class="form-control" value=" {{ $p->USERNAME }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="password" name="password" placeholder="Masukkan password" class="form-control" value=" {{ $p->PASSWORD }}"></div>
</div>


<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Status Pegawai</label></div>
        <div class="col-12 col-md-9">
          <select name="statuspegawai" id="statuspegawai" class="form-control pro-edt-select form-control-primary">
          	@if($p->STATUS_PEGAWAI == 0)
                <option  selected value="1">Active</option>
                <option selected value="0">Non-active</option>
                @else
                <option value="1">Active</option>
                <option value="0">Non-active</option>
                @endif
                </select>
        </div>
</div>

<center>
<a href="PegawaiIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="PegawaiIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
@endforeach
</div>
</div>
</div>



@endsection