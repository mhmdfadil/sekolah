<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Sekolah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            background: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 260px;
            background-color: #343a40;
            color: white;
            padding: 2rem 1rem;
        }

        .sidebar h4 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 2rem;
        }

        .sidebar .nav-link {
            color: #ccc;
            margin: 0.5rem 0;
            padding: 0.75rem 1.25rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background-color: #198754;
            color: white !important;
        }

        .main-content {
            margin-left: 270px;
            padding: 2rem;
            min-height: 100vh;
        }

        .navbar {
            margin-left: 270px;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .icon-card {
            font-size: 3rem;
            margin-right: 1rem;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>Menu</h4>
    <ul class="nav flex-column">
        <li><a class="nav-link" href="{{ route('dashboard')}}"><i class="bi bi-house-door"></i> Dashboard</a></li>
        <li><a class="nav-link" href="{{ route('siswa')}}"><i class="bi bi-people"></i> Siswa</a></li>
        <li><a class="nav-link " href="{{ route('guru')}}"><i class="bi bi-boxes"></i> Guru</a></li>
        <li><a class="nav-link " href="{{ route('mp')}}"><i class="bi bi-person"></i> Mata Pelajaran</a></li>
        <li><a class="nav-link active" href="{{ route('kelas')}}"><i class="bi bi-building"></i> Kelas</a></li>
    </ul>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistem Sekolah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="main-content">
    <h2>Data Kelas</h2>
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
        <i class="bi bi-plus-circle"></i> Tambah Data
    </button>
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kelas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tingkatan" class="form-label">Tingkatan</label>
                            <input type="text" class="form-control" name="tingkatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" class="form-control" name="unit" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<table id="kelas" class="table table-striped table-bordered">
        <thead class="table-success">
            <tr>
                <th>No</th>
               <th>Tingkatan</th>
               <th>Unit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->tingkatan }}</td>
                <td>{{ $item->unit }}</td>
                <td>
                    <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
        $(document).ready(function() {
            $('#kelas').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/id.json"  // URL untuk indonesia.json
                }
            });
        });
</script>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Sistem Sekolah. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
