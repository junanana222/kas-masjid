<!DOCTYPE html>
<html>
<head>
    <title>Tambah Donatur</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Tambah Donatur</h2>

    <form action="/donatur" method="POST">

        @csrf

        <div class="form-group">
            <label>Nama</label>

            <input type="text"
                   name="nama"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>No Telp</label>

            <input type="text"
                   name="no_telp"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Alamat</label>

            <textarea name="alamat"
                      class="form-control"></textarea>
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

</body>
</html>