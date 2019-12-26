@extends('layouts.divisi')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div class="float-right">
                @include('divisi.add')
            </div>

            <h6 class="m-0 font-weight-bold text-primary mt-2">Tabel Divisi</h6>


          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama Divisi</th>
                    <th>Keterangan Divisi</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($divisi as $divisi)
                  <tr>
                    <td class="text-left">{{$no++}}</td>
                    <td class="text-left">{{$divisi->nama_divisi}}</td>
                    <td class="text-left">{{$divisi->ket_divisi}}</td>
                    <td>
                         @include('divisi.edit')
                         @include('divisi.delete')

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
