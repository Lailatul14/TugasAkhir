@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Harga Paket Sewa</strong>
                    </div>
                        <a  class="btn pull-right btn-success" width= "50px"  href="PaketCreate" role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Paket</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Paket</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Jenis Paket</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Harga Paket</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      @foreach($paket as $pk)
                                        <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $pk->ID_PAKET}}</td>
                                        <td class="sorting_1">{{ $pk->JENIS_PAKET}}</td>
                                        <td class="sorting_1">{{ $pk->HARGA_PAKET}}</td>
                                        <td class="sorting_1">
                                            <a href="PaketEdit{{ $pk->ID_PAKET }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                            <a href="PaketDestroy/{{ $pk->ID_PAKET }}" id="btn-hapus">
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
            </div><!-- .animated -->
        </div><!-- .content -->      
        @include('sweetalert::alert') 
@endsection