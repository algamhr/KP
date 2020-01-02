@extends('layouts.backend')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">



       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

       <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-right">
                @include('user.add')
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @include('user.edit')
                            @include('user.delete')
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
