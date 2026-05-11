<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengeluaran Sosial</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Pengeluaran Sosial</h2>

    <form action="/pengeluaran-sosial/{{ $pengeluaran->pengeluaran_id }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Kategori</label>

            <input type="text"
                   name="kategori"
                   value="{{ $pengeluaran->kategori }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Uraian</label>

            <input type="text"
                   name="uraian"
                   value="{{ $pengeluaran->uraian }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Nominal</label>

            <input type="number"
                   name="nominal"
                   value="{{ $pengeluaran->nominal }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Tanggal</label>

            <input type="date"
                   name="tanggal"
                   value="{{ $pengeluaran->tanggal }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>

            <textarea name="deskripsi"
                      class="form-control">{{ $pengeluaran->deskripsi }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>