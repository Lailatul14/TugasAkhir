@extends('tampilan/index')
@section('konten')
<div class="col-lg-12">
<div class="card">
<div class="card-header"><strong>Edit Data Customer</strong></div>
<div class="card-body card-block">
  @foreach($customer as $c)
<form action="CustomerUpdate" method="POST" class="form-horizontal">
  {{ @csrf_field() }}

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Customer</label></div>
<div class="col-12 col-md-9"><input type="text" readonly="" id="idcustomer" name="idcustomer" class="form-control" value=" {{ $c->ID_CUSTOMER }}"></div>
</div>

                          
<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Customer</label></div>
<div class="col-12 col-md-9"><input type="text" id="namacustomer" name="namacustomer"  class="form-control" value=" {{ $c->NAMA_CUSTOMER }}"></div>
</div>

<div class="row form-group">
  <div class="col col-md-3">
    <label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
        <div class="col-12 col-md-9">
          <select name="jkcustomer" id="jkcustomer" class="form-control pro-edt-select form-control-primary">
            @if($c->JK_CUSTOMER == 0)
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
<div class="col-12 col-md-9"><input required="" type="text" id="telpcustomer" name="telpcustomer" placeholder="Masukkan nomor telpon" class="form-control" value=" {{ $c->TELP_CUSTOMER }}"></div>
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
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
<div class="col-12 col-md-9" ><input required="" type="text" id="alamatcustomer" name="alamatcustomer" placeholder=" Masukkan alamat" class="form-control" value=" {{ $c->ALAMAT_CUSTOMER }}"></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Identitas</label></div>
                    <div class="col-12 col-md-9"><input  required="" type="images" id="identitascustomer" name="identitascustomer" class="form-control-file" value=" {{ $c->IDENTITAS_CUSTOMER }}"></div>
                  </div>



<center>
<a href="CustomerIndex"><button type="submit" class="btn btn-info">Simpan</button></a>
<a href="CustomerIndex"><button type="submit" class="btn btn-danger">Batal</button></a>
</center>
</form>
@endforeach
</div>
</div>
</div>


@endsection