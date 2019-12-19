@extends('layouts.kategoribarang')

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
            <div class="float-right">
                @include('kategorybarang.add')
            </div>

            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Barang Masuk</h6>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                  <tr>
                    <th>id</th>
                    <th>Kategori Barang</th>
                    <th>Keterangan Barang</th>
                    <th>Action</th>
                  </tr>

                </thead>
                @php $no = 1; @endphp
                @foreach ($kategory_barang as $kategoribarang)
                <tbody>
                  <tr>
                    <td class="text-left">{{$no}}</td>
                    <td class="text-left">{{$kategoribarang->kategori_brg}}</td>
                    <td class="text-left">{{$kategoribarang->keterangan_brg}}</td>
                    <td>
                         @include('kategorybarang.edit')
                         @include('kategorybarang.delete')

                    </td>
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
