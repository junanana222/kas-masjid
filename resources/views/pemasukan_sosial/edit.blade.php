<!DOCTYPE html>
<html>
<head>
    <title>Edit Pemasukan Sosial</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Pemasukan Sosial</h2>

    <form action="/pemasukan-sosial/{{ $pemasukan->pemasukan_id }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Donatur</label>

            <select name="donatur_id" class="form-control">

                @foreach($donatur as $d)

                <option value="{{ $d->donatur_id }}"
                    {{ $pemasukan->donatur_id == $d->donatur_id ? 'selected' : '' }}>

                    {{ $d->nama }}

                </option>

                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label>Kategori</label>

            <input type="text"
                   name="kategori"
                   value="{{ $pemasukan->kategori }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Uraian</label>

            <input type="text"
                   name="uraian"
                   value="{{ $pemasukan->uraian }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Nominal</label>

            <input type="number"
                   name="nominal"
                   value="{{ $pemasukan->nominal }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Tanggal</label>

            <input type="date"
                   name="tanggal"
                   value="{{ $pemasukan->tanggal }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>

            <textarea name="deskripsi"
                      class="form-control">{{ $pemasukan->deskripsi }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>