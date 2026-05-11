<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pemasukan Sosial</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Tambah Pemasukan Sosial</h2>

    <form action="/pemasukan-sosial" method="POST">

        @csrf

        <div class="form-group">
            <label>Donatur</label>

            <select name="donatur_id" class="form-control">

                <option value="">-- Pilih Donatur --</option>

                @foreach($donatur as $d)

                <option value="{{ $d->donatur_id }}">
                    {{ $d->nama }}
                </option>

                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label>Kategori</label>

            <input type="text"
                   name="kategori"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Uraian</label>

            <input type="text"
                   name="uraian"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Nominal</label>

            <input type="text"
                id="nominal"
                name="nominal"
                class="form-control">
        </div>

        <div class="form-group">
            <label>Tanggal</label>

            <input type="date"
                   name="tanggal"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>

            <textarea name="deskripsi"
                      class="form-control"></textarea>
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>
<script>

var rupiah = document.getElementById('nominal');

rupiah.addEventListener('keyup', function(e){

    this.value = formatRupiah(this.value, 'Rp. ');

});

function formatRupiah(angka, prefix){

    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {

        separator = sisa ? '.' : '';

        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined
        ? rupiah + ',' + split[1]
        : rupiah;

    return prefix == undefined
        ? rupiah
        : (rupiah ? 'Rp. ' + rupiah : '');

}

</script>
</body>
</html>