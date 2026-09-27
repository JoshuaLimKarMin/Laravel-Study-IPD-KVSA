<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BUKU</title>
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

        <form action="/buku_edit/{{ $ebuku->id }}" method="post">
            @csrf
            <p>Judul buku</p>
            <input name="judul" value="{{ $ebuku->judul }}" type="text">
            <br>
            <p>Nama penulis</p>
            <input name="nama_penulis" value="{{ $ebuku->nama_penulis }}" type="text">
            <br>
            <p>Nama peminjam</p>
            <input name="nama_peminjam" value="{{ $ebuku->nama_peminjam }}" type="text">
            <br>
            <p>Tarikh pinjaman</p>
            <input name="tarikh_pinjaman" value="{{ $ebuku->tarikh_pinjaman }}" type="date">
            <br>
            <p>Tarikh pulangan</p>
            <input name="tarikh_pulangan" value="{{ $ebuku->tarikh_pulangan }}" type="date">
            <br>
            <p>Status</p>
            <select name="status">
                <option {{ $ebuku->status == "Lewat" ? "selected" : "" }} value="Lewat">Lewat</option>
                <option {{ $ebuku->status == "Telah hantar" ? "selected" : "" }} value="Telah hantar">Telah Hantar</option>
                <option {{ $ebuku->status == "Hilang" ? "selected" : "" }} value="Hilang">Hilang</option>
            </select>
            <br>
            <br>
            <button type="submit">Hantar</button>
        </form>

    </center>
</body>
</html>