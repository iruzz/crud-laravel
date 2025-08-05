<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Daftar Guru</h1>
      <a href="{{ route('guru.create') }}">ADD PRODUCT</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
           @forelse($gurus as $guru)
            <tr>
                <td>{{ $guru->id }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->umur }}</td>
                <td>{{ $guru->email }}</td>
                <td></td>
            </tr>
           @empty
            <tr>
                <td colspan="4">Tidak ada data guru</td>
            </tr>
           @endforelse
        </tbody>
    </table>

    {{ $gurus->links() }}
</body>
</html>