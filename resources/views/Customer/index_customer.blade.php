@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Customer</strong>
                    </div>
                        <a  class="btn pull-right btn-success" width= "50px"  href="CustomerCreate" role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Customer</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Customer</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Nama</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Jenis Kelamin</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Nomor Telpon</th>
                                             <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;"> Kota</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Alamat</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Foto Identitas</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                   <tbody>
                                    @foreach($customer as $c)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $c->ID_CUSTOMER}}</td>
                                        <td class="sorting_1">{{ $c->NAMA_CUSTOMER }}</td>

                                        <td class="sorting_1 {{ ($c->JK_CUSTOMER ==1 )  ? 'label-warning' : 'label-success' }}">{{ ($c->JK_CUSTOMER == 1) ? 'pria' : 'wanita' }} </td>
                                    
                                        
                                        <td class="sorting_1">{{ $c->TELP_CUSTOMER }}</td>
                                        @foreach ($kota as $k)
                                        @if ($c-> ID_KOTA == $k->ID_KOTA)
                                        <td class="sorting_1">{{ $k->NAMA_KOTA }}</td>
                                        @endif
                                        @endforeach
                                        <td class="sorting_1">{{ $c->ALAMAT_CUSTOMER }}</td>
                                        <td>
                      <img style="height:auto; width:30%; cursor:zoom-in;" src="{{ url('/foto_identitas/'. $c-> IDENTITAS_CUSTOMER) }}">
                      </td>

                                        

                                        <td class="sorting_1">
                                            <a href="CustomerEdit{{ $c->ID_CUSTOMER }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                                <a href="CustomerDestroy/{{ $c->ID_CUSTOMER }}" id="btn-hapus">
                                                 <button  type="submit" data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Hapus">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('sweetalert::alert')
        </div>

@endsection