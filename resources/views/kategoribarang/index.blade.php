@extends('layouts.kategoribarang')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div class="float-right">
                @include('kategoribarang.add')
            </div>

            <h6 class="m-0 font-weight-bold text-primary">Tabel Kategori Barang</h6>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Kategori Barang</th>
                    <th>Keterangan Barang</th>
                    <th>Action</th>
                  </tr>

                </thead>
                @php $no = 1; @endphp
                @foreach ($kategoribarang as $kategoribarang)
                <tbody>
                  <tr>
                    <td class="text-left">{{$no}}</td>
                    <td class="text-left">{{$kategoribarang->kategoribarang}}</td>
                    <td class="text-left">{{$kategoribarang->keteranganbarang}}</td>
                    <td>
                         @include('kategoribarang.edit')
                         @include('kategoribarang.delete')

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
