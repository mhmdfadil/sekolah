<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Sekolah - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2980b9, #8e44ad);
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            max-width: 450px;
            padding: 40px;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-50px);}
            to {opacity: 1; transform: translateY(0);}
        }
        .login-header {
            text-align: center;
            color: #2c3e50;
        }
        .login-header h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #8e44ad;
        }
        .login-header p {
            font-size: 1rem;
            color: #7f8c8d;
        }
        .form-label {
            font-weight: 600;
            color: #34495e;
        }
        .form-control {
            border-radius: 10px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 5px rgba(142, 68, 173, 0.5);
        }
        .btn-primary {
            background: linear-gradient(135deg, #8e44ad, #2980b9);
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            width: 100%;
            font-weight: bold;
            color: white;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #2980b9, #8e44ad);
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }
        .form-check-label {
            font-size: 0.9rem;
            color: #34495e;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-header">
        <h2>Sistem Sekolah</h2>
        <p>Silakan login untuk mengakses sistem</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
    @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div class="footer">
        <small>&copy; 2024 Sistem Sekolah. Semua hak cipta dilindungi.</small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
