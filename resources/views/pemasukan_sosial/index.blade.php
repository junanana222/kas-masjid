<!DOCTYPE html>
<html>
<head>
    <title>Data Pemasukan Sosial</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Data Pemasukan Sosial</h2>

    <a href="/pemasukan-sosial/create"
       class="btn btn-primary mb-3">
       Tambah Pemasukan
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Donatur</th>
            <th>Kategori</th>
            <th>Uraian</th>
            <th>Nominal</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @foreach($pemasukan as $p)

        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{ $p->donatur->nama }}</td>

            <td>{{ $p->kategori }}</td>

            <td>{{ $p->uraian }}</td>

            <td>
                Rp {{ number_format($p->nominal,0,',','.') }}
            </td>

            <td>{{ $p->tanggal }}</td>

            <td>{{ $p->deskripsi }}</td>

            <td>

                <a href="/pemasukan-sosial/{{ $p->pemasukan_id }}/edit"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <form action="/pemasukan-sosial/{{ $p->pemasukan_id }}"
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