@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data User</strong>
                    </div>
                        <a  class="btn pull-right btn-success" width= "50px"  href="PegawaiCreate" role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Pegawai</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Pegawai</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Jabatan</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Nama Pegawai</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> JK Pegawai</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Nomor Telpon</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Kota</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Alamat</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Username</th>
                                            <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Password</th> -->
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Status Pegawai</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($pegawai as $p)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $p->ID_PEGAWAI}}</td>
                                        @foreach ($jabatan as $j)
                                        @if ($p-> ID_JABATAN == $j->ID_JABATAN)
                                        <td class="sorting_1">{{ $j->NAMA_JABATAN}}</td>
                                        @endif
                                        @endforeach

                                        <td class="sorting_1">{{ $p->NAMA_PEGAWAI }}</td>

                                        <td class="sorting_1 {{ ($p->JK_PEGAWAI ==1 )  ? 'label-warning' : 'label-success' }}">{{ ($p->JK_PEGAWAI == 1) ? 'pria' : 'wanita' }} </td>
                                    
                                        <td class="sorting_1">{{ $p->TELP_PEGAWAI }}</td>

                                        @foreach ($kota as $k)
                                        @if ($p-> ID_KOTA == $k->ID_KOTA)
                                        <td class="sorting_1">{{ $k->NAMA_KOTA}}</td>
                                        @endif
                                        @endforeach

                                        <td class="sorting_1">{{ $p->ALAMAT }}</td>
                                        <td class="sorting_1">{{ $p->USERNAME }}</td><!-- 
                                        <td class="sorting_1">{{ $p->PASSWORD }}</td> -->

                                        <td>
                                            <span class="sorting_1 {{ ($p->STATUS_PEGAWAI == 1) ? 'label-primary' : 'label-danger' }}">{{ ($p->STATUS_PEGAWAI == 1) ? 'Active' : 'Non-Active' }}</span>
                                        </td>

                                        <td class="sorting_1">
                                            <a href="PegawaiEdit{{ $p->ID_PEGAWAI }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                     <a href="PegawaiDestroy/{{ $p->ID_PEGAWAI }}" id="btn-hapus">
                                                 <button type="submit" data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Hapus">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button></a>
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
        </div>
@include('sweetalert::alert')
@endsection