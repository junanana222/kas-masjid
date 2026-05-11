<!DOCTYPE html>
<html>
<head>
    <title>Data Pengeluaran Sosial</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <h2>Data Pengeluaran Sosial</h2>

    <a href="/pengeluaran-sosial/create"
       class="btn btn-primary mb-3">
       Tambah Pengeluaran
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Uraian</th>
            <th>Nominal</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @foreach($pengeluaran as $p)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $p->kategori }}</td>

            <td>{{ $p->uraian }}</td>

            <td>
                Rp {{ number_format($p->nominal,0,',','.') }}
            </td>

            <td>{{ $p->tanggal }}</td>

            <td>{{ $p->deskripsi }}</td>

            <td>

                <a href="/pengeluaran-sosial/{{ $p->pengeluaran_id }}/edit"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <form action="/pengeluaran-sosial/{{ $p->pengeluaran_id }}"
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