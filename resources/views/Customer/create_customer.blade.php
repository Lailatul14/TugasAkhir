@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Edit Data User</strong></div>
<div class="card-body card-block">

<form action="CustomerStore" method="POST" class="form-horizontal">
  {{ @csrf_field() }}


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
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Customer</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="namacustomer" name="namacustomer" placeholder="Masukkan nama customer" class="form-control"></div>
</div>

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
        <div class="col-12 col-md-9">
          <select name="jkcustomer" id="jkcustomer" class="form-control pro-edt-select form-control-primary">
            <option disabled="" selected="">Pilih Jenis Kelamin</option> 
                <option  value="1">Pria</option>
                <option  value="0">Wanita</option>
                </select>
        </div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telpon</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="telpcustomer" name="telpcustomer" placeholder="Masukkan nomor telpon" class="form-control"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="alamatcustomer" name="alamatcustomer" placeholder=" Masukkan alamat" class="form-control"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Identitas</label></div>
                    <div class="col-12 col-md-9"><input required="" type="file" id="identitascustomer" name="identitascustomer" class="form-control-file"></div>
                  </div>
   


<center>
<a href="CustomerIndex" ><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="CustomerIndex" id="btn-cancel"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
</div>
</div>
</div>


@endsection