<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Buku</title>
    <style>
        .header {
            display: flex;
            justify-content: center;
            place-items: center;
        }
    </style>
</head>
<body>
    <center>
        <div class="header">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo" width="50px">
            <h1>E-BUKU</h1>
        </div>
        <table border="1" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Nama penulis</th>
                <th>Nama peminjam</th>
                <th>Tarikh pinjaman</th>
                <th>Tarikh pulangan</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Tindakan</th>
            </tr>
            @foreach($ebuku as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->nama_penulis }}</td>
                <td>{{ $item->nama_peminjam }}</td>
                <td>{{ $item->tarikh_pinjaman }}</td>
                <td>{{ $item->tarikh_pulangan }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ (new DateTime($item->created_at))->format("H:i:s") }}</td>
                <td style="display: flex; gap: 5px">
                    <a href="/buku_edit/{{ $item->id }}">Edit</a>
                    <form action="/buku/{{ $item->id }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <a href="/buku">Tambah</a>
    </center>
</body>
</html>