@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Pembayaran</strong>
                    </div>
                        <a  class="btn pull-right btn-success" width= "50px"  href="PembayaranCreate"  role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Pembayaran</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Pembayaran</th>
                                            
                                            <<!-- th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Tipe Pembayaran</th> -->
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Tanggal Pembayaran</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Total Tagihan</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Jumlah Bayar</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Status Pembayaran</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                   <tbody>
                                    @foreach($pembayaran as $pembayaran)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $pembayaran->ID_PEMBAYARAN}}</td>

                                        <!-- @foreach ($penyewaan as $w)
                                        @if ($pembayaran-> ID_SEWA == $w->ID_SEWA)
                                         <td class="sorting_1 {{ ($w->TIPE_PEMBAYARAN ==1 )  ? 'label-warning' : 'label-success' }}">{{ ($w->TIPE_PEMBAYARAN == 1) ? 'DP' : 'Lunas' }} </td>
                                        @endif
                                        @endforeach -->
                                        
                                        <td class="sorting_1">{{ $pembayaran->TGL_PEMBAYARAN }}</td>
                                         @foreach ($penyewaan as $w)
                                        @if ($pembayaran-> ID_SEWA == $w->ID_SEWA)
                                        <td class="sorting_1">{{ $w->SISA_BAYAR}}</td>
                                        @endif
                                        @endforeach

                                        <td class="sorting_1">{{ $pembayaran->JUMLAH_BAYAR }}</td>
                                        
                                        <td class="sorting_1 {{ ($pembayaran->STATUS_PEMBAYARAN ==1 )  ? 'label-warning' : 'label-success' }}">{{ ($pembayaran->STATUS_PEMBAYARAN == 1) ? 'Lunas' : 'Belum Lunans' }} </td>

                                        <td class="sorting_1">
                                            <a href="PembayaranEdit{{ $pembayaran->ID_PEMBAYARAN }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                                <a href="PembayaranDestroy/{{ $pembayaran->ID_PEMBAYARAN }}" id="btn-hapus">
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
@include('sweetalert::alert')
@endsection