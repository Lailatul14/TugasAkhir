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
                        <a  class="btn pull-right btn-success" width= "50px"  href="ListPenyewaan" role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Customer</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Sewa</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> ID Customer</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Id Pegawai</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Tanggal Sewa</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;"> Tanggal Kembali </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Tipe Bayar</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Total Bayar</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Total Penyewaan</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Sisa Bayar</th>

                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                   <tbody>
                                    @foreach($penyewaan as $w)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $w->ID_SEWA}}</td>
                                        <td class="sorting_1">{{ $w->ID_CUSTOMER }}</td>
                                        <td class="sorting_1">{{ $w->ID_PEGAWAI }}</td>
                                        <td class="sorting_1">{{ $w->TGL_SEWA }}</td>
                                        <td class="sorting_1">{{ $w->TGL_HARUSKEMBALI}}</td>
                                        <td class="sorting_1">{{ $w->TOTAL_BAYAR }}</td>
                                        <td class="sorting_1">{{ $w->TOTAL_PENYEWAAN }}</td>
                                        <td class="sorting_1">{{ $w->SISA_BAYAR }}</td>

                                        <td class="sorting_1">
                                            <a href="CustomerEdit{{ $c->ID_CUSTOMER }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                                <a href="CustomerDestroy/{{ $c->ID_CUSTOMER }}">
                                                 <button type="submit" data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Hapus">
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
        </div>

@endsection