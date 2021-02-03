@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Edit Data User</strong></div>
<div class="card-body card-block">
  @foreach($penyewaan as $penyewaan)
<form action="DaftarSewaUpdate" method="POST" class="form-horizontal">
  {{ @csrf_field() }}

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Sewa</label></div>
<div class="col-12 col-md-9"><input type="text" readonly="" id="idsewa" name="idsewa" class="form-control" value=" {{ $penyewaan->ID_SEWA }}"></div>
</div>

<!-- <div class="row form-group">
<div class="col col-md-3"><label  for="text-input" class=" form-control-label">Nama Customer</label></div>
                                        <div  class="col-12 col-md-9">
                                        <select class="form-control pl-0 form-control-line"  id="idcustomer" name="idcustomer">
                                            
                                          @foreach($customer as $c) 
                                          <option value=" {{ $c->ID_CUSTOMER}}" selected >
                                            {{ $c->NAMA_CUSTOMER}}
                                          </option>
                                          @endforeach
                                            </select>  
                                        </div>
                                      </div> -->

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Customer</label></div>
<div class="col-12 col-md-9"><input readonly="" type="text" id="idcustomer" name="idcustomer"  class="form-control" value=" {{ $penyewaan->ID_CUSTOMER }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Sewar</label></div>
<div class="col-12 col-md-9"><input readonly="" type="text" id="tglsewa" name="tglsewa"  class="form-control" value=" {{ $penyewaan->TGL_SEWA }}"></div>
</div>


<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Status Penyewaan</label></div>
        <div class="col-12 col-md-9">
          <select name="statuspenyewaan" id="statuspenyewaan" class="form-control pro-edt-select form-control-primary">
            @if($penyewaan->STATUS_PENYEWAAN == 0)
                <option  selected value="1">Belum diambil</option>
                <option selected value="0">Sudah diambil</option>
                @else
                <option value="1">Belum diambil</option>
                <option value="0">Sudah diambil</option>
                @endif
                </select>
        </div>
</div>



<center>
<a href="DaftarSewaIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="DaftarSewaIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
@endforeach
</div>
</div>
</div>


@endsection