@extends('tampilan/index')
@section('konten')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                        <div class="page-title">
                        <h1>Dashboard</h1>
                        </div>
                        </div>
                        </div>
                    </div>
                    <form action="PenyewaanStore" method="post">
{{ @csrf_field() }}
<div class="content">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="progress-box progress-1">
              <div class="row form-group">
                <div class="col col-md-4"><label for="text-input" class=" form-control-label">Tanggal Sewa        :</label></div>
                <div class="col-9 col-md-8"><input type="date" id="tglsewa" name="tglsewa" placeholder="Masukkan nama customer" class="form-control"></div>
              </div>
            </div>

<div class="progress-box progress-2">
<div class="row form-group">
<div class="col col-md-4"><label for="text-input" class=" form-control-label">Tgl Kembali :</label></div>
<div class="col-9 col-md-8"><input type="date" id="tglharuskembali" name="tglharuskembali" placeholder="Masukkan nama customer" class="form-control"></div>
</div>
</div>

</div> 
</div>
</div>

<div class="col-lg-6">
  <div class="card">
    <div class="card-body">
      <div class="progress-box progress-1">
        <div class="row form-group">
          <div class="col col-md-4"><label for="text-input" class=" form-control-label"> Pegawai :</label></div>
            <select id="namajabatan" class="col-9 col-md-8" name="idpegawai">
               <option disabled selected style="padding: 10px">Pilih Pegawai</option>
                 @foreach($pegawai as $p)
                    <option value="{{ $p->ID_PEGAWAI }}">{{ $p->NAMA_PEGAWAI }}</option>
                      @endforeach
            </select>  
        </div>
      </div>
<div class="progress-box progress-1">
  <div class="row form-group">
    <div class="col col-md-4"><label for="text-input" class=" form-control-label"> Customer :</label></div>
        <select id="idcustomer" class="col-9 col-md-8" name="idcustomer">
            <option disabled selected style="padding: 10px">Pilih User</option>
                @foreach($customer as $c)
            <option value="{{ $c->ID_CUSTOMER }}">{{ $c->NAMA_CUSTOMER }}</option>
                @endforeach
        </select>  
</div>
</div>

</div>
</div> 
</div>

<div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="progress-box progress-1">
              <div class="row form-group">
                <div class="col col-md-4"><label for="text-input" class=" form-control-label">Identitas Jaminan</label></div>
                <select id="idjaminan" class="col-md-12" name="idjaminan">
               <option selected style="padding: 10px">Pilih Jaminan</option>
                 @foreach($jaminan as $j)
                    <option value="{{ $j->ID_JAMINAN }}">{{ $j->JENIS_JAMINAN }}</option>
                      @endforeach
            </select>  
              </div>
            </div>

<div class="progress-box progress-2">
<div class="row form-group">
<div class="col col-md-"><label for="text-input" class=" form-control-label">Nomor identitas :</label></div>
<div class="col-9 col-md-12"><input type="text" id="nomor" name="nomor" placeholder="Masukkan Nomor identitas" class="form-control"></div>
</div>
</div>


</div> 
</div>
</div>
</div>
</div>
</div>
<center>
 <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info  m-r-10" >PILIH PAKET<i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></center>

       <!-- Modal content-->
      <div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div  class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">Daftar Paket</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                  <table class="table table-bordered" > 
                    <thead>
                      <tr bgcolor="#3399CC">
                      <th width="295"><font color="white">ID Paket</font></th>
                      <th width="295"><font color="white">Jenis Paket</font></th>
                      <th width="295"><font color="white">Harga</font></th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($detil_paket as $d)
                                               <center> 
                                                <tr onclick="pilihBarang('{{ $d->ID_PAKET }}-{{ $d->ID_MOBIL }}')">

                                                   <td>{{ $d->ID_PAKET }}</td>
                                                   @foreach ($paket as $pk)
                                                      @if($pk->ID_PAKET == $d->ID_PAKET)
                                                        @foreach($mobil as $mb)
                                                          @if($d->ID_MOBIL == $mb->ID_MOBIL)
                                                            <td>{{ $pk->JENIS_PAKET }}-{{ $mb->NAMA_MOBIL }}</td>
                                                          @endif
                                                        @endforeach
                                                        <td>{{ $pk->HARGA_PAKET }}</td>
                                                      @endif
                                                    @endforeach
                                                </tr>
                                                </center>
                           @endforeach
                    </tbody>
                  </table>
            </div>
                
      </div> 
    </div>
  </div><br>


<table class="table table-bordered" id="keranjang" >
  <thead class="thead-steelblue" >
    <tr bgcolor="#3399CC">
      <th scope="col" ><font color="white">Jenis Paket</font></th>
      <th scope="col"><font color="white">Lama Sewa</font></th>
      <th scope="col"><font color="white">Harga Paket </font></th>
      <th scope="col"><font color="white">Bayar </font></th>
      <th scope="col"><font color="white">Sub Total</font></th>
      <th scope="col"><font color="white">Action</font></th>
    </tr>
  </thead>
  <tbody>
      <div class="col-lg-5">
          <center>

</div>
</div> 


      
      <br>
      </div>
    </tbody>
  </table>



   <script>
  var barang = <?php echo json_encode($paket); ?>;
  var mobil = <?php echo json_encode($mobil); ?>;
  console.log(barang[0]["JENIS_PAKET"]);
  var colnum=0;

  function getVal(event){
    if (event.keyCode === 13) {
      modal();
    }
  }

  function pilihBarang(id){
    var idx= id.split("-");
    var index;
    var mobilx;
    for(var i=0;i<barang.length;i++){
      if(barang[i]["ID_PAKET"]==idx[0]){
        console.log(barang[i]);
        index=i;
        break;
      }
    }
    for(var i=0;i<mobil.length;i++){
      if(mobil[i]["ID_MOBIL"]==idx[1]){
        console.log(mobil[i]);
        mobilx=i;
        break;
      }
    }
    //$("#myModal").modal("hide");

    var table = document.getElementById("keranjang");
    var row = table.insertRow(table.rows.length);
    row.setAttribute('id','col'+colnum);
    var id = 'col'+colnum;
    colnum++;

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    console.log(index);
    cell1.innerHTML = '<input type="hidden" name="id['+barang[index]["ID_PAKET"]+']" value="'+barang[index]["ID_PAKET"]+'"><input type="hidden" name="idmobil['+barang[index]["ID_PAKET"]+']" value="'+mobil[mobilx]["ID_MOBIL"]+'">'+barang[index]["JENIS_PAKET"]+" - "+mobil[mobilx]["NAMA_MOBIL"];
    cell2.innerHTML = '<input type="number" name="qty['+barang[index]["ID_PAKET"]+']" class="btn-default" value="1" oninput="recount(\''+barang[index]["ID_PAKET"]+'\')" id="qty'+barang[index]["ID_PAKET"]+'">';   
    cell3.innerHTML = '<input class="harga" type="hidden" id="harga'+barang[index]["ID_PAKET"]+'" name="harga['+barang[index]["ID_PAKET"]+']" value="'+barang[index]["HARGA_PAKET"]+'">'+barang[index]["HARGA_PAKET"];
    cell4.innerHTML = '<input class="discount btn-default" type="number" name="discount['+barang[index]["ID_PAKET"]+']"  value="0" oninput="recount(\''+barang[index]["ID_PAKET"]+'\')" id="discount'+barang[index]["ID_PAKET"]+'">';  
    cell5.innerHTML = '<input type="hidden" class="subtotal" name="subtotal['+barang[index]["ID_PAKET"]+']" value="0" id="subtotal'+barang[index]["ID_PAKET"]+'"><span id="subtotalval'+barang[index]["ID_PAKET"]+'">'+0+'</span>';
    cell6.innerHTML = '<button onclick="hapusEl(\''+id+'\')"  class="btn btn-danger fa fa-trash-o"></button>';

    total();
    var id_barang=barang[index]["ID_PAKET"];
    recount(id_barang);
    
  }
  function lm(i){
    var min =  document.getElementById("qty"+i).value;
    if(min <= 1){

    }else{
    min--;
    document.getElementById("qty"+i).value = min;
    recount(i);
    }
  }
  function ln(i){
    var plus =  document.getElementById("qty"+i).value;
    console.log(plus);
    plus++;
    document.getElementById("qty"+i).value = plus;
    console.log(plus);
    recount(i);
  }
  function total(){
    var subtotals = document.getElementsByClassName("subtotal");
    var total = 0;
    for(var i=0; i<subtotals.length;++i){
      total += Number(subtotals[i].value); 
    }
    document.getElementById("pajak").value = total;
    var nilai = document.getElementById("subtotal-val").value;
    nilai = parseInt(nilai-total);
    total = parseInt(100/100*total);
    document.getElementById("total-val").value = nilai;

  }

  function recount(id){

    var price = document.getElementById("harga"+id).value;
    var sembarang = document.getElementById("qty"+id).value;
    var discount = document.getElementById("discount"+id).value;

    var lego = Number(price*sembarang)-discount;
    var hargatotal = Number(price*sembarang);
    document.getElementById("subtotal-val").value = hargatotal;
    document.getElementById("subtotal"+id).value = discount;
    document.getElementById("subtotalval"+id).innerHTML = discount;
    total();
  }

  function modal(){
    $("#myModal").modal("show");
    document.getElementById("myText").value = "";
  }
  function hapusEl(idCol) {
    document.getElementById(idCol).remove();
    total();
  }

  
</script>
    
  </tbody>
</table>
</div>
</div> 

<div class="progress-box progress-1">
<div class="row form-group">
<div class=" pull right"><img src="ElaAdmin-master/images/status2.png" alt="Logo"  width="55px">Tipe Bayar</div>
<div class="col-9 col-md-3">
            <select name="tipepembayaran" id="tipepembayaran" class="form-control pro-edt-select form-control-primary">
            <option disabled="" selected="">Pilih Tipe Pembayaran</option> 
                <option  value="1">DP</option>
                <option  value="0">Lunas</option>
            </select>
</div>
</div>
</div>

<div class="progress-box progress-1">
<div class="row form-group">
<div class="pull right"><img src="ElaAdmin-master/images/wallet.png" alt="Logo"  width="55px">Total biaya sewa </div>
<div class="col-9 col-md-3"><input id="subtotal-val"  type="text" id="totalpayment" name="totalpayment" placeholder="Rp.0" class="form-control"></div>
</div>
</div>


<div class="progress-box progress-1">
<div class="row form-group">
<div class="pull right"><img src="ElaAdmin-master/images/money.png" alt="Logo"  width="55px">Total Bayar</div>
<div class="col-9 col-md-3"><input id="pajak"  type="text" name="totalbayar" placeholder="Rp.0" class="form-control"></div>
</div>
</div>

<div class="progress-box progress-1">
<div class="row form-group">
<div class="pull right "><img src="ElaAdmin-master/images/kembalian.png" alt="Logo"  width="55px">Sisa Pembayaran</div>
<div class="col-9 col-md-3"><input  type="text" id="total-val" name="sisabayar" name="namacustomer" placeholder="Rp. 0" class="form-control"></div>
</div>
</div>



      <button type="submit" class="btn btn-warning">ADD PAYMENT</button>
      <button type="reset" class="btn btn-success">CANCEL</button>
    </form>
                </div>
             </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')
@endsection