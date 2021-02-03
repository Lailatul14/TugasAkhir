@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Mobil</strong>
                    </div>
                        <a  class="btn pull-right btn-success" width= "50px"  href="MobilCreate" role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Mobil</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Mobil</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">ID Merk</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Nama Mobil </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Jenis Mobil</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Warna </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Nomor polisi</th>
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Tahun Beli</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Status</th>
                                          
                                             <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($mobil as $mb)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $mb->ID_MOBIL}}</td>

                                        @foreach ($merk as $m)
                                        @if ($mb-> ID_MERK == $m->ID_MERK)
                                        <td class="sorting_1">{{ $m->NAMA_MERK }}</td>
                                        @endif
                                        @endforeach
                                        <td class="sorting_1">{{ $mb->NAMA_MOBIL }}</td>
                                        <td>
                                            <span class="sorting_1 {{ ($mb->JENIS_MOBIL == 1) ? 'label-primary' : 'label-danger' }}">{{ ($mb->JENIS_MOBIL == 1) ? 'Manual' : 'Matic' }}</span>
                                        </td>
                                    
                                        <td class="sorting_1">{{ $mb->WARNA_MOBIL }}</td>
                                        <td class="sorting_1">{{ $mb->PLAT_NOMOR }}</td>
                                        <td class="sorting_1">{{ $mb->TAHUN_BELI }}</td>

                                        <td>
                                            <span class="sorting_1 {{ ($mb->STATUS_MOBIL == 1) ? 'btn btn-primary btn-xs disabled' : 'btn btn-danger disabled' }}">{{ ($mb ->STATUS_MOBIL == 1) ? 'Tersedia' : 'Disewa' }}</span>
                                        </td>

                                        <td class="sorting_1">
                                            <a href="MobilEdit{{ $mb->ID_MOBIL }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                                <a href="MobilDestroy/{{ $mb->ID_MOBIL }}" id="btn-hapus">
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