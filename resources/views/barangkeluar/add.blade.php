<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahModal">
    <i class="fa fa-plus"></i>
    Tambah
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Barang Keluar</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <form action="{{route('barangkeluar.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="barangmasuk">Nama Barang</label>
                    <select name="barangmasuk" id="barangmasuk" class="form-control">
                        @foreach($barangmasuk as $barangmasuk)
                        <option value=" {{ $barangmasuk->id }}">
                        {{ $barangmasuk->nama_brg }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_brg_keluar">Jumlah Barang Keluar</label>
                    <input type="text" class="form-control"  name="jumlah_brg_keluar" id="jumlah_brg_keluar" placeholder="Jumlah Barang">
                </div>



                <div class="form-group">
                    <label for="masuk">Tanggal Masuk </label>
                     <input class="form-control" type="text"  name="tgl_keluar" id="published_at"  placeholder="Tanggal">
                    <div class="mdc-line-ripple"></div>
                </div>


                <div class="form-group">
                    <label for="divisi">Divisi</label>
                    <select name="divisi" id="divisi" class="form-control">
                        @foreach($divisi as $divisi)
                        <option value=" {{ $divisi->id }}">
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
