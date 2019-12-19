<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahModal">
    <i class="fa fa-plus"></i>
    Tambah
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <form action="{{route('kategoribarang.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group">
                    <label for="kategoribarang">Kategori Barang</label>
                    <input type="text" class="form-control  name="kategoribarang" id="kategoribarang" placeholder="Kategori Barang" ">
                </div>

                <div class="form-group">
                    <label for="keteranganbarang">Keterangan</label>
                    <input type="text" class="form-control  name="keteranganbarang" id="keteranganbarang" placeholder="Keterangan Barang" ">
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>
