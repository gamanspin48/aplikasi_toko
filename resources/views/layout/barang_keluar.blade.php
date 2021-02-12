@extends('partials.template')
@section('main')
  <!-- Fixed navbar -->
  <div class="mt-5"></div>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/barang_masuk">Pembelian</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/barang_keluar">Penjualan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengaturan_barang" tabindex="-1" aria-disabled="true">Pengaturan Barang</a>
        </li>
      </ul>
        <div class="form-inline mt-2 mt-md-0">
            
            <button class="btn btn-outline-success my-2 my-sm-0">Logout</button>
          </div>
     
    </div>
  </nav>
  <div class="pt-3">
    <div class="row m-2 ">
        <div class="col-md-12">
        {{-- <a><h5 class="text-primary float-right">Logout</h5></a> --}}
            <h5 class="text-primary float-left">Saldo : Rp.100.000</h5>
        </div>
        <div class="col-md-12">
            <h5 class="text-center mb-5">Tabel Barang</h5>
            <table id="tableBarangOnly" data-order='[[ 0, "desc" ]]' class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga Jual</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $barang as $b)
                    <tr>
                        <td>{{$b->kode_barang}}</td>
                        <td>{{$b->nama_barang}}</td>
                        <td>{{$b->stok}}</td>
                        <td>{{$b->harga_jual}}</td>
                        <td>
                          <button type="button" kode="{{$b->kode_barang}}" class="btn btn-primary"><i class="fa fa-plus"></i></button>  
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                    
                
            </table>
            <button type="button" id="btnProcess" class="btn btn-success float-right mt-2">Proses</button>
        </div>
        <div class="col-md-12">
            <h5 class="text-center mb-5">Tabel Barang Keluar</h5>
            <table id="tableBarangKeluar" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect FJSFJSJFS SJFJS JSFJ</td>
                        <td>Edinburgh</td>
                        <td>61</td>
            
                        <td><button type="button" class="btn btn-danger"><i class="fa fa-minus"></i></button>
                            
                        </td>
                    </tr> --}}
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </tfoot> --}}
                    
                
            </table>
        </div>

    </div>
    <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Kode Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Satuan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Stok</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Harga Beli</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Harga Jual</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Merk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Spesifikasi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </div>
               
             
                
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
               
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="modalTambahJumlah" tabindex="-1" role="dialog" aria-labelledby="modalTambahJumlahTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Input Jumlah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="hidden" id="kode_barang">
                    <input type="hidden" id="index_selected">
                    <input type="number" class="form-control" id="jumlah" placeholder="Isi Jumlah" value="1">
                  </div>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="btnSubmitJumlah" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script type="text/javascript">
    var detailBarang = @php echo $barang_detail; @endphp;
    var detailBarangKeluar = {};
    var tBarang =    $('#tableBarangOnly').DataTable({
          "pageLength": 5 
        });
    var tJual = $('#tableBarangKeluar').DataTable();
    var base_url = "@php echo config('app.base_url_api') @endphp";
    $('#tableBarangOnly tbody').on( 'click', 'button', function () {
        let kode = $(this).attr('kode');
        $('#kode_barang').val(kode);
        $('#modalTambahJumlah').modal('show');
        $('#index_selected').val(tBarang.row( $(this).closest('tr')).index());
    });
    $("#btnSubmitJumlah").click(function(){
      let jumlah = $('#jumlah').val();
      let kode =   $('#kode_barang').val();
      if ( jumlah == '' || jumlah <= 0){
        alert('masukkan jumlah dengan benar');
      }else if (jumlah > detailBarang[kode]['stok']){
        alert('stok kurang');
      }else{
          let dataBarang = new Object;
          Object.assign(dataBarang, detailBarang[kode]);
          let rowIndex = $('#index_selected').val();
          detailBarang[kode]['stok'] -= jumlah;
          tBarang.cell(rowIndex, 2).data(detailBarang[kode]['stok']);
          dataBarang['jumlah'] = jumlah;
          dataBarang['total'] = dataBarang['harga_jual'] * jumlah;

          if ( kode in detailBarangKeluar){
      
              let jumlahTotal =  parseInt(detailBarangKeluar[kode]['jumlah']) + parseInt(dataBarang['jumlah']);
              let totalTotal = parseFloat(detailBarangKeluar[kode]['total']) + parseFloat(dataBarang['total'])

              detailBarangKeluar[kode]['jumlah'] = jumlahTotal;
              detailBarangKeluar[kode]['total'] = totalTotal;
              detailBarangKeluar[kode]['stok'] = detailBarang[kode]['stok'];

              dataBarang['jumlah'] = jumlahTotal;
              dataBarang['total'] = totalTotal;

              //find index
              let rowIndex2 = -1;
              tJual.rows().eq( 0 ).filter( function (rowIdx) {
                  if (tJual.cell( rowIdx, 0).data() == kode){
                    rowIndex2 = rowIdx;
                  }
              } );

              editRow(dataBarang,rowIndex2);
          }else{

              addRow(dataBarang);
              let newBarang = {};
              newBarang[kode] = dataBarang;
              Object.assign(detailBarangKeluar, newBarang);
              detailBarangKeluar[kode]['stok'] = detailBarang[kode]['stok'];
              
          }
          console.log(detailBarangKeluar);
          $('#modalTambahJumlah').modal('hide');
      }
    });

     $('#tableBarangKeluar tbody').on( 'click', 'button', function () {
        let kode = $(this).attr('kode');
        var filteredData = tJual
          .rows()
          .indexes()
          .filter( function ( value, index ) {
            return tJual.row(value).data()[0] == kode; 
          } );
          tJual.rows( filteredData )
          .remove()
          .draw();
        detailBarang[kode]['stok'] = parseInt(detailBarang[kode]['stok']) + parseInt(detailBarangKeluar[kode]['jumlah']);  
        delete detailBarangKeluar[kode];
        let rowIndex = -1;
        tBarang.rows().eq( 0 ).filter( function (rowIdx) {
            if (tBarang.cell( rowIdx, 0).data() == kode){
              rowIndex = rowIdx;
            }
        });
        tBarang.cell(rowIndex, 2).data(detailBarang[kode]['stok']);


     });

     $('#btnProcess').click(function(){
       
        if (Object.keys(detailBarangKeluar).length > 0){
            if (confirm('Apakah anda yakin ?')){
                let isSuccess = true;
                $.each( detailBarangKeluar, function( key, value ) {
                      console.log(key+':'+value['stok']);
                    $.ajax({
                        url: base_url+'barang/'+key+'/'+value['stok'],
                        type: 'PUT',
                        contentType: 'application/json',
                        success: function(result) {
                            if(!result['success']){
                              isSuccess = false;
                              return false;
                            }
                        }
                    });
                });
                if (isSuccess){
                  location.reload();
                }else{
                  alert('terjadi kesalahan harap cek data barang kembali');
                }
            }
           
        }else{
          alert('tambah barang dulu!');
        }
     });

    function addRow(data){
       
        tJual.row.add([
            data['kode_barang'],
            data['nama_barang'],
            data['harga_jual'],
            data['jumlah'],
            data['total'],
            "<button type='button' class='btn btn-danger' kode='"+ data['kode_barang']+"'><i class='fa fa-minus'></i></button>"
        ]).draw(true);

    }

    function editRow(data,rowIndex){

       tJual.cell(rowIndex, 2).data(data['jumlah']);
       tJual.cell(rowIndex, 3).data(data['total']);

    }
  </script>
@endsection