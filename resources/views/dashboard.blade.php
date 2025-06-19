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
        <li><a class="nav-link active" href="{{ route('dashboard')}}"><i class="bi bi-house-door"></i> Dashboard</a></li>
        <li><a class="nav-link " href="{{ route('siswa')}}"><i class="bi bi-people"></i> Siswa</a></li>
        <li><a class="nav-link" href="{{ route('guru')}}"><i class="bi bi-boxes"></i> Guru</a></li>
        <li><a class="nav-link" href="{{ route('mp')}}"><i class="bi bi-person"></i> Mata Pelajaran</a></li>
        <li><a class="nav-link" href="{{ route('kelas')}}"><i class="bi bi-building"></i> Kelas</a></li>
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
    <h2>Dashboard Sistem Sekolah</h2>
    <p>Selamat datang di Sistem Informasi Sekolah.</p>

    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card bg-info text-white h-100 p-4 d-flex align-items-center">
                <i class="bi bi-bookmark-fill icon-card"></i>
                <div>
                    <h5 class="card-title">Siswa</h5>
                    <h3 class="card-text">{{ $siswaJumlah }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-success text-white h-100 p-4 d-flex align-items-center">
                <i class="bi bi-people-fill icon-card"></i>
                <div>
                    <h5 class="card-title">Guru</h5>
                    <h3 class="card-text">{{ $guruJumlah }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-warning text-white h-100 p-4 d-flex align-items-center">
                <i class="bi bi-person-fill icon-card"></i>
                <div>
                    <h5 class="card-title">Mata Pelajaran</h5>
                    <h3 class="card-text">{{ $mpJumlah }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Sistem Sekolah. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
