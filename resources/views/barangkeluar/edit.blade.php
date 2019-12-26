<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$barangkeluar->id}}">
    <i class="fa fa-edit"></i>

</a>
<!-- Tambah Modal-->
<div class="modal fade" id="editModal{{$barangkeluar->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Barang Keluar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('barangkeluar.update', $barangkeluar->id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_brg" id="nama_brg" placeholder="Nama Barang"
                            value="{{$barangkeluar->nama_brg}}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_brg_keluar">Jumlah Barang Keluar</label>
                        <input type="text" class="form-control" name="jumlah_brg_keluar" id="jumlah_brg_keluar"
                            placeholder="Jumlah Barang Keluar" value="{{$barangkeluar->jumlah_brg_keluar}}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_brg">Tanggal Keluar</label>
                        <input type="text" class="form-control" name="tgl_keluar" id="tgl_keluar"
                            placeholder="yyyy-mm-dd" value="{{$barangkeluar->tgl_keluar}}">
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <select name="divisi_id" id="divisi" class="form-control">
                            @foreach($divisi as $divisi)
                            <option value="{{$divisi->id}}">
                                {{ $divisi->nama_divisi }}
                            </option>
                            @endforeach
                        </select>
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
