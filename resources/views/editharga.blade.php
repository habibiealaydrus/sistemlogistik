{{-- modal edit --}}
<div class="modal fade" id="modalEditHarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Harga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/tambahjenispengiriman" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga PER KM</label>
                        <input type="text" class="form-control" id="nama" name="name">
                    </div>
                    <button type='submit' class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
