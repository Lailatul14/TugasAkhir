@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Merk</strong>
                    </div>
                        <a  class="btn pull-right btn-success" width= "50px"  href="MerkCreate" role="button" aria-haspopup="true"  aria-expanded="false">
                        <i class="fa fa-plus" aria-hidden="true"></i>Tambah Merk</a>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 171px;">Id Merk</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:281px;"> Merk Mobil</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 281px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      @foreach($merk as $m)
                                        <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $m->ID_MERK}}</td>
                                        <td class="sorting_1">{{ $m->NAMA_MERK}}</td>
                                        <td class="sorting_1">
                                            <a href="MerkEdit{{ $m->ID_MERK }}">
                                                <button type="submit" data-toggle="tooltip" title="" class=" pd-setting-ed" data-original-title="Edit">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                            <a href="MerkDestroy/{{ $m->ID_MERK }}" id="btn-hapus">
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