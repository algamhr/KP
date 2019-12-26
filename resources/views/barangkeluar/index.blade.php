@extends('layouts.barangkeluar')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-right">
                @include('barangkeluar.add')
            </div>

            <h6 class="m-0 font-weight-bold text-primary mt-2">Tabel Data Barang Keluar</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Tanggal Keluar</th>
                            <th>Divisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($barangkeluar as $barangkeluar)
                        <tr>
                            <td class="text-left">{{$no++}}</td>
                            <td class="text-left">{{$barangkeluar->nama_brg}}</td>  
                            <td class="text-left">{{$barangkeluar->jumlah_brg_keluar}}</td>
                            <td class="text-left">{{$barangkeluar->tgl_keluar}}</td>
                            <td class="text-left">{{$barangkeluar->divisi->nama_divisi}}</td>
                            <td>
                                @include('barangkeluar.edit')
                                @include('barangkeluar.delete')
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
