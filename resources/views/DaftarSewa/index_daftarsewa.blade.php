@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Sewa</strong>
                    </div>
                        
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Sewa</th>
                                            
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Nama Customer</th>

                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Tanggal Sewa</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Status</th>
                                            
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                   <tbody>
                                    @foreach($penyewaan as $penyewaan)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $penyewaan->ID_CUSTOMER}}</td>
                                        @foreach ($customer as $c)
                                        
                                        @if ($penyewaan-> ID_CUSTOMER == $c->ID_CUSTOMER)
                                        <td class="sorting_1">{{ $c->NAMA_CUSTOMER }}</td>
                                        @endif
                                        @endforeach

                                        <td class="sorting_1">{{ $penyewaan->TGL_SEWA }}</td>

                                        <td class="sorting_1 {{ ($penyewaan->STATUS_PENYEWAAN ==1 )  ? 'label-warning' : 'label-success' }}">{{ ($penyewaan->STATUS_PENYEWAAN == 1) ? 'Belum diambil' : 'Sudah diambil' }} </td>

                                       

                                        <td class="sorting_1">
                                            <a href="DaftarSewaEdit{{ $penyewaan->ID_SEWA }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                                
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