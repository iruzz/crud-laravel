<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Guru</h1>
    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('guru.index') }}">Kembali ke Daftar Guru</a
</body>
</html>