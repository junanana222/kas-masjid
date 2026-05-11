<!DOCTYPE html>
<html>
<head>
    <title>Edit Donatur</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Donatur</h2>

    <form action="/donatur/{{ $donatur->donatur_id }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama</label>

            <input type="text"
                   name="nama"
                   value="{{ $donatur->nama }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>No Telp</label>

            <input type="text"
                   name="no_telp"
                   value="{{ $donatur->no_telp }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Alamat</label>

            <textarea name="alamat"
                      class="form-control">{{ $donatur->alamat }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>