<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$divisi->id}}">
    <i class="fa fa-edit"></i>

</a>
<!-- Tambah Modal-->
<div class="modal fade" id="editModal{{$divisi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Divisi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <form action="{{route('divisi.update', $divisi->id)}}" method="POST">
            @method('PUT')
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="form-group">
                            <label for="nama_divisi">Nama Divisi</label>
                            <input type="text" class="form-control" name="nama_divisi" id="nama_divisi" placeholder="Nama Divisi" value="{{$divisi->nama_divisi}}">
                        </div>
            <div class="form-group">
                    <label for="ket_divisi">Keterangan</label>
                    <input type="text" class="form-control" name="ket_divisi" id="ket_divisi" placeholder="Keterangan Divisi" value="{{$divisi->ket_divisi}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>
