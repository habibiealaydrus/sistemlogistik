{{-- modal hapus jenis kiriman --}}
<div class="modal fade" id="modalHapusPaketKiriman{{ $datainput->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Paket Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/destroy/{{ $datainput->id }}" method="POST" class="mt-3 mb-3">
                    @method('DELETE')
                    @csrf
                    <p>Anda ingin yakin menghapus jenis kiriman {{ $datainput->nomor_resi }} ?</p>
                    <button type="submit" class="btn btn-danger ">YA</button>
                    <a href="/frontline" type="button" class="btn btn-primary ">CANCEL</a>
                </form>
            </div>
        </div>
    </div>

</div>
