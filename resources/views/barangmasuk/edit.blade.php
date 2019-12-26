<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editModal{{$barangmasuk->id}}">
    <i class="fa fa-edit"></i>

</a>
<!-- Tambah Modal-->
<div class="modal fade" id="editModal{{$barangmasuk->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('barangmasuk.update', $barangmasuk->id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategoribarang">Kategori Barang</label>
                        <select name="kategoribarang_id" id="kategoribarang" class="form-control">
                        @foreach($kategoribarang as $kategoribarang)
                        <option value="{{$kategoribarang->id}}">
                            {{ $kategoribarang->kategoribarang }}
                        </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="namabrg">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_brg" id="nama_brg" placeholder="Nama Barang"
                            value="{{$barangmasuk->nama_brg}}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_brg">Nama Barang</label>
                        <input type="text" class="form-control" name="jumlah_brg" id="nama_brg"
                            placeholder="Jumlah Barang" value="{{$barangmasuk->jumlah_brg}}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_brg">Tanggal Masuk</label>
                        <input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="yyyy/mm/dd"
                            value="{{$barangmasuk->tgl_masuk}}">
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
