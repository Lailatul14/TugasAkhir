@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header">
 <strong class="card-title">Tambah Mobil</strong>
</div>
<div class="card-body card-block">
@foreach($mobil as $mb)
<form action="MobilUpdate" method="POST" class="form-horizontal">
	{{ @csrf_field() }}

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Mobil</label></div>
<div class="col-12 col-md-9"><input required="" type="text" readonly="" id="idmobil" name="idmobil" placeholder="Masukkan nama merk" class="form-control" value=" {{ $mb->ID_MOBIL}}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Merk</label></div>
                                        <div class="col-12 col-md-9">
                                        <select class="form-control pl-0 form-control-line" id="idmerk" name="idmerk">
                                            
                                          @foreach($merk as $m) 
                                          <option value=" {{ $m->ID_MERK}}" selected>
                                            {{$m->NAMA_MERK}}
                                          </option>
                                          @endforeach
                                            </select>  
                                        </div>
                                      </div>


<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Mobil</label></div>
<div class="col-12 col-md-9"><input required="" type="text" required="" id="namamobil" name="namamobil" class="form-control" value=" {{ $mb->NAMA_MOBIL }}"></div>
</div>

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Jenis Mobil</label></div>
        <div class="col-12 col-md-9">
          <select name="jenismobil" id="jenismobil" class="form-control pro-edt-select form-control-primary">
          	@if($mb->JENIS_MOBIL == 0)
                <option  selected value="1">Manual</option>
                <option selected value="0">Matic</option>
                @else
                <option value="1">Manual</option>
                <option value="0">Matic</option>
                @endif
                </select>
        </div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Warna Mobil</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="warnamobil" name="warnamobil" class="form-control" value=" {{ $mb->WARNA_MOBIL }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Polisi</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="platnomor" name="platnomor" class="form-control" value=" {{ $mb->PLAT_NOMOR }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Beli</label></div>
<div class="col-12 col-md-9"><input required="" type="text" id="tahunbeli" name="tahunbeli" class="form-control" value=" {{ $mb->TAHUN_BELI }}"></div>
</div>



<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Status Mobil</label></div>
        <div class="col-12 col-md-9">
          <select name="statusmobil" id="statusmobil" class="form-control pro-edt-select form-control-primary">
          	@if($mb->STATUS_MOBIL == 0)
                <option  selected value="1">Tersedia</option>
                <option selected value="0">Disewa</option>
                @else
                <option value="1">Tersedia</option>
                <option value="0">Disewa</option>
                @endif
                </select>
        </div>
</div>

<center>
<a href="MobilIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="MobilIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
@endforeach
</div>
</div>
</div>



@endsection