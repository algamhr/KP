<a class="btn btn-danger btn-circle" href="#" data-toggle="modal" data-target="#deleteModal{{$barangmasuk->id}}">
        <i class="fa fa-trash"></i>

    </a>
    <!-- Tambah Modal-->
    <div class="modal fade" id="deleteModal{{$barangmasuk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Barang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align:center;">
                    <p>Yakin ingin menghapus data dengan barang <b>{{$barangmasuk->nama_brg}}</b> ?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('barangmasuk.destroy', $barangmasuk->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                    </form>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    {{-- <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger">Hapus</a> --}}
                </div>
            </div>
        </div>
    </div>
