@extends('layouts.barangmasuk')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">       
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Simpan Dokumen</a>
    </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Barang Masuk</h6>
            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                <thead>
                  <tr>
                    <th>ID Barang</th>
                    <th>Kategori Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach ($barangmasuk as $barangmasuk)
                <tbody>
                  <tr>
                    <td class="text-left"><input type="hidden" name="dteday" value="{{$barangmasuk->id}}">{{$barangmasuk->id}}</td>
                    <td class="text-left"><input type="hidden" name="dteday" value="{{$barangmasuk->kategori_brg}}">{{$barangmasuk->kategori_brg}}</td>
                    <td class="text-left"><input type="hidden" name="dteday" value="{{$barangmasuk->nama_brg}}">{{$barangmasuk->nama_brg}}</td>
                    <td class="text-left"><input type="hidden" name="dteday" value="{{$barangmasuk->jumlah_brg}}">{{$barangmasuk->jumlah_brg}}</td>
                    <td class="text-left"><input type="hidden" name="dteday" value="{{$barangmasuk->tgl_masuk}}">{{$barangmasuk->tgl_masuk}}</td>
                    <td>
              @include('barangmasuk.delete')</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection