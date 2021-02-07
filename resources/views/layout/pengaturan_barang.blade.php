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
        <li class="nav-item">
            <a class="nav-link" href="/barang_keluar">Penjualan</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/pengaturan_barang" tabindex="-1" aria-disabled="true">Pengaturan Barang</a>
        </li>
      </ul>
        <div class="form-inline mt-2 mt-md-0">
            
            <button class="btn btn-outline-success my-2 my-sm-0">Logout</button>
          </div>
     
    </div>
  </nav>
  <div class="container pt-5">
      <div class="row mb-2">
      <div class="col-md-12">
        {{-- <a><h5 class="text-primary float-right">Logout</h5></a> --}}
      </div>
          <div class="col-md-12 ">
            <h5 class="text-primary float-left">Saldo : Rp.100.000</h5>
            <button type="button" class="btn btn-primary float-right" id="btnTambah"><i class="fa fa-plus"></i>&nbspTambah Barang</button>
          </div>
      </div>
    <table id="tableBarang" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $b)
                <tr>
                    <td>{{$b->kode_barang}}</td>
                    <td>{{$b->nama_barang}}</td>
                    <td>{{$b->stok}}</td>
                    <td>{{$b->harga_jual}}</td>
                    <td>{{$b->harga_beli}}</td>
                    <td>
                        <button type="button" class="btn btn-success"kode="{{$b->kode_barang}}" tipe="edit"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-secondary" kode="{{$b->kode_barang}}" tipe="detail"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-danger"kode="{{$b->kode_barang}}" tipe="hapus"> <i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>

            
        
    </table>
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
      
  </div>

  <!--Modal 2 -->
    <div class="modal fade" id="modalDetailBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
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
                            <input type="text" class="form-control" id="detail-kode_barang" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-nama_barang" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Satuan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-satuan" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Stok</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-stok" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Harga Beli</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-harga_beli" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Harga Jual</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-harga_jual" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Merk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-merk" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Spesifikasi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="detail-spesifikasi" disabled>
                        </div>
                    </div>
                </div>
               
             
                
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="detail-keterangan" disabled>
                    </div>
               
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>
      
  </div>

<script type="text/javascript">

    $(document).ready(function() {
        var detailBarang = @php echo $barang_detail; @endphp;
  
        $("#tableBarang tbody tr td button").click(function () {
            let kode = $(this).attr('kode');
            let tipe = $(this).attr('tipe')
            if (tipe == 'detail'){
                initDetail(detailBarang[kode]);
                $('#modalDetailBarang').modal('show');
            }
        });
         $("#btnTambah").click(function(){
           
        }); 
    });
    
    function initDetail(barang){
        $.each( barang, function( key, value ) {
             $('#detail-'+key).val(value);
        })
    }
  


</script>  

@endsection

