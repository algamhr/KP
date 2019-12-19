<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$barangmasuk->id}}">
    <i class="fa fa-edit"></i>

</a>
{{-- <!-- Tambah Modal-->
<div class="modal fade" id="editModal{{$jnspajak->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <form action="{{route('jenis-pajak.update', $jnspajak->id)}}" method="POST">
            @method('PUT')
            {{ csrf_field() }}
            <div class="modal-body">
            <div class="form-group">
                    <label for="jenis_pajak">Nama Lengkap</label>
                    <input type="text" class="form-control" name="jenis_pajak" id="jenis_pajak" placeholder="jenis_pajak" value="{{$jnspajak->jenis_pajak}}">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div> --}}
