<!-- Modal -->
<div class="modal fade" id="Modalinputpengiriman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/createpengiriman" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nomor Resi Pengiriman</label>
                        <input type="text" class="form-control" autofocus name="nomor_resi" id="nomor" readonly>
                        <small id="pengirimHelp" class="form-text text-muted">
                            No. Resi Pengiriman
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Nama Pengirim</label>
                        <input type="text" class="form-control" autofocus name="namapengirim" id="namapengirim"
                            placeholder="Nama Pengirim">
                        <small id="pengirimHelp" class="form-text text-muted">
                            Masukan Sesuai KTP
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Alamat Pengirim</label>
                        <input type="text" class="form-control" name="alamatpengirim" id="alamatpengirim"
                            placeholder="Alamat Pengirim">
                    </div>
                    <div class="form-group">
                        <label>Kontak Pengirim</label>
                        <input type="tel" class="form-control" name="kontakpengirim" id="kontakpengirim"
                            placeholder="0812-34567-890" pattern="[0-9]{4}-[0-9]{5}-[0-9]{3}" required>
                        <small id="penerimaHelp" class="form-text text-muted">
                            Format=0812-34567-890
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Nama Penerima</label>
                        <input type="text" class="form-control" name="namapenerima" id="namapenerima"
                            placeholder="Nama penerima">
                        <small id="penerimaHelp" class="form-text text-muted">
                            Masukan Sesuai KTP
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Alamat Penerima</label>
                        <input type="text" class="form-control" name="alamatpenerima" id="alamatpenerima"
                            placeholder="Alamat Penerima">
                    </div>
                    <div class="form-group">
                        <label>Kontak Penerima</label>
                        <input type="tel" class="form-control" name="kontakpenerima" id="kontakpenerima"
                            placeholder="0812-34567-890" pattern="[0-9]{4}-[0-9]{5}-[0-9]{3}">
                        <small id="penerimaHelp" class="form-text text-muted">
                            Format=0812-34567-890
                        </small>
                    </div>
                    <div class="form-group">
                        <label>Berat Barang</label>
                        <input type="number" class="form-control" name="beratbarang" id="alamat"
                            placeholder="Berat Paket">
                    </div>
                    <div class="form-group">
                        <label>Lebar Barang</label>
                        <input type="number" class="form-control" name="lebarbarang" id="lebar"
                            placeholder="Lebar barang">
                    </div>
                    <div class="form-group">
                        <label>Panjang Barang</label>
                        <input type="number" class="form-control" name="panjangbarang" id="panjang"
                            placeholder="Panjang barang">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Jenis Kiriman</label>
                        </div>
                        <select class="custom-select" id="hargaJenisKirim" name="jeniskiriman" oninput="hitungBiaya()">
                            @foreach ($optionkirim as $jeniskirim)
                                <option value="{{ $jeniskirim->harga }}">{{ $jeniskirim->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Biaya Pengiriman</label>
                        {{-- script biaya pengiriman --}}
                        <input type="number" class="form-control" id="jarak"
                            placeholder="masukan jarak (dalam km)" oninput="hitungBiaya()">
                        <span class="d-flex justify-content-left mt-2">
                            Rp.<input type="text" class="form-control" id="kalkulasiBiaya" name="biaya"
                                readonly>
                        </span>
                    </div>
                    <div class="form-group d-none">
                        <label>Status Kiriman</label>
                        {{-- script biaya pengiriman --}}
                        <input type="number" class="form-control" id="jarak" value="2"
                            name="statuskiriman">
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

    function hitungBiaya() {
        var jarak = document.getElementById("jarak").value;
        var hargaKirim = document.getElementById('hargaJenisKirim').value;
        document.getElementById("kalkulasiBiaya").value = jarak * hargaKirim;
    }
</script>
