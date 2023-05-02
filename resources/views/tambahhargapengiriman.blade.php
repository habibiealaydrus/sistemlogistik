{{-- modal tambah harga pengiriman --}}

<div class="modal fade" id="modalTambahHargaPengiriman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jenis Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/createjeniskirim" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama jenis pengiriman</label>
                        <input type="text" class="form-control" id="nama" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga per KM</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <button type='submit' class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

</div>
