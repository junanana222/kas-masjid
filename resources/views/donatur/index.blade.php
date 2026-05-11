<!DOCTYPE html>
<html>
<head>
    <title>Data Donatur</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Data Donatur</h2>

    <a href="/donatur/create" class="btn btn-primary mb-3">
        Tambah Donatur
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        @foreach($donatur as $d)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->no_telp }}</td>
            <td>{{ $d->alamat }}</td>

            <td>

                <a href="/donatur/{{ $d->donatur_id }}/edit"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <form action="/donatur/{{ $d->donatur_id }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>
        </tr>

        @endforeach

    </table>

</div>

</body>
</html>