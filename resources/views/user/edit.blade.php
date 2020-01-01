<a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$user->id}}">
        <i class="fa fa-edit"></i>
        Edit
    </a>
    <!-- Tambah Modal-->
    <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <form action="{{route('user.update', $user->id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Nama Lengkap" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Password" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
