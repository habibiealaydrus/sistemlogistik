<!-- Modal -->
<div class="modal fade" id="ModalEditPesanan{{ $datainput->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/updatedatapaket/{{ $datainput->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Nomor Resi Pengiriman</label>
                        <input type="text" class="form-control" autofocus name="nomor_resi" id="nomor" readonly
                            value="{{ $datainput->nomor_resi }}">
                        <small id="pengirimHelp" class="form-text text-muted">
                            No. Resi Pengiriman
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Nama Pengirim</label>
                        <input type="text" class="form-control" autofocus name="namapengirim" id="namapengirim"
                            placeholder="Nama Pengirim" value="{{ $datainput->namapengirim }}">
                        <small id="pengirimHelp" class="form-text text-muted">
                            Masukan Sesuai KTP
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Alamat Pengirim</label>
                        <input type="text" class="form-control" name="alamatpengirim" id="alamatpengirim"
                            placeholder="Alamat Pengirim" value="{{ $datainput->alamatpengirim }}">
                    </div>
                    <div class="form-group">
                        <label>Kontak Pengirim</label>
                        <input type="tel" class="form-control" name="kontakpengirim" id="kontakpengirim"
                            value="{{ $datainput->kontakpengirim }}" required>
                        <small id="penerimaHelp" class="form-text text-muted">
                            Format=0812-34567-890
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Nama Penerima</label>
                        <input type="text" class="form-control" name="namapenerima" id="namapenerima"
                            value="{{ $datainput->namapenerima }}">
                        <small id="penerimaHelp" class="form-text text-muted">
                            Masukan Sesuai KTP
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Alamat Penerima</label>
                        <input type="text" class="form-control" name="alamatpenerima" id="alamatpenerima"
                            value="{{ $datainput->alamatpenerima }}">
                    </div>
                    <div class="form-group">
                        <label>Kontak Penerima</label>
                        <input type="tel" class="form-control" name="kontakpenerima" id="kontakpenerima"
                            value="{{ $datainput->kontakpenerima }}">
                        <small id="penerimaHelp" class="form-text text-muted">
                            Format=0812-34567-890
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Berat Barang</label>
                        <input type="number" class="form-control" name="beratbarang" id="alamat"
                            value="{{ $datainput->beratbarang }}">
                    </div>
                    <div class="form-group">
                        <label>Lebar Barang</label>
                        <input type="number" class="form-control" name="lebarbarang" id="lebar"
                            placeholder="Lebar barang" value="{{ $datainput->lebarbarang }}">
                    </div>
                    <div class="form-group">
                        <label>Panjang Barang</label>
                        <input type="number" class="form-control" name="panjangbarang" id="panjang"
                            placeholder="Panjang barang" value="{{ $datainput->panjangbarang }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const nomor = document.getElementById("nomor");

    function makeid(length) {
        let result = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        const charactersLength = characters.length;
        let counter = 0;
        while (counter < length) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
            counter += 1;
        }
        return result;
    };
    nomor.value = makeid(20);
</script>
<script>
    function hargaJenis() {
        let element = document.getElementById('jeniskirim');
        let getHarga = element.options[element.selectedIndex].getAttribute("data-harga")
        //console.log(getHarga);
        document.getElementById("hargajenis").value = getHarga;

    }

    function hitungBiaya() {
        var jarak = document.getElementById("jarak").value;
        var hargajenis = document.getElementById("hargajenis").value;
        document.getElementById("kalkulasiBiaya").value = jarak * hargajenis;
    }
</script>
