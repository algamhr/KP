<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahModal">
    <i class="fa fa-plus"></i>
    Tambah
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Masuk</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <form action="{{route('barangmasuk.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group">
                    <label for="kategoribarang_id">Kategori Barang</label>
                    <select name="kategoribarang" id="kategoribarang" class="form-control">
                        @foreach($kategoribarang as $kategoribarang)
                        <option value=" {{ $kategoribarang->id }}"

                            >
                        {{ $kategoribarang->kategoribarang }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama Barang">Nama Barang</label>
                    <input type="text" class="form-control"  name="nama_brg" id="nama_brg placeholder="Nama Barang">
                </div>



                <div class="form-group">
                    <label for="jumlah_brg">Jumlah Barang</label>
                    <input type="text" class="form-control"  name="jumlah_brg" id="jumlah barang" placeholder="Jumlah Barang">
                </div>


                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Masuk</label>
                    <input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="yyyy-mm-dd">
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
