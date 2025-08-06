<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Guru</title>

  <!-- Bootstrap 5 CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="text-primary">Daftar Guru</h1>
      <a href="{{ route('guru.create') }}" class="btn btn-success">+ Tambah Guru</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
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
          </tr>
          @empty
          <tr>
            <td colspan="4" class="text-center text-danger">Tidak ada data guru</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
      {{ $gurus->links() }}
    </div>
  </div>

  <!-- Bootstrap JS (Opsional jika pakai komponen JS seperti modal) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
