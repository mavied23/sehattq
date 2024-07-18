<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Resep Sayur Bening Bayam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #95dafa;
        }

        .navbar .navbar-expand-lg {
            background-color: #e6f2ff;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .table {
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .form-control,
        .form-select {
            height: 40px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        .notif {
            position: relative;
            display: inline-block;
        }

        .circle {
            position: absolute;
            top: -1px;
            right: -5px;
            border-radius: 50%;
            background-color: rgba(249, 32, 32, 0.86);
            color: white;
            font-size: 12px;
            padding: 2px 9px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:white">
        <a class="navbar-brand" href="/home">Sehatqu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/obat">Obat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dokter">Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/konsultasi">Konsultasi</a>
                </li>
                <div class="notif">
                    <a href="/pesan" class="nav-link">
                        <i data-feather="message-square"></i>
                    </a>
                </div>
                <li class="nav-item" style="margin-left:800px">
                    <form action="/logoutuser" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-1">
                {{-- <li class="nav-item">
                @auth
                    <p style="font-size: 20px;">Selamat datang, {{ Auth::user()->name }}!</p>
                @else
                    @if (session('user_name'))
                        <p>Selamat datang, {{ session('user_name') }}!</p>
                    @endif
                @endauth
            </li> --}}
            </ul>
        </div>
    </nav>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9; color: #333;">
    <div style="width: 80%; margin: 20px auto; padding: 20px; background: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #2c3e50;">Kebijakan Privasi</h1>
        <p style="text-align: justify;">
            Kebijakan privasi dari aplikasi dokter serta apotik online biasanya mencakup informasi tentang bagaimana data pribadi pengguna dikumpulkan, digunakan, disimpan, dan dilindungi oleh platform tersebut. Beberapa hal yang sering tercakup dalam kebijakan privasi tersebut meliputi:
        </p>
        <ul>
            <li style="margin-bottom: 10px;">
                Jenis data pribadi yang dikumpulkan, seperti informasi medis, kontak, dan pembayaran.
            </li>
            <li style="margin-bottom: 10px;">
                Tujuan pengumpulan data, misalnya untuk memberikan layanan kesehatan online, pemrosesan pembayaran, atau keperluan administratif lainnya.
            </li>
            <li style="margin-bottom: 10px;">
                Bagaimana data pribadi diproses, apakah dijamin kerahasiaannya, dan dengan siapa data dapat dibagikan.
            </li>
            <li style="margin-bottom: 10px;">
                Prosedur keamanan data yang diterapkan untuk melindungi informasi pribadi pengguna dari akses yang tidak sah.
            </li>
            <li style="margin-bottom: 10px;">
                Hak pengguna terkait privasi data, termasuk hak untuk mengakses, mengoreksi, atau menghapus informasi pribadi mereka dari sistem.
            </li>
        </ul>
        <p style="text-align: justify;">
            Saat menggunakan aplikasi dokter dan apotik online, penting untuk membaca dan memahami kebijakan privasi yang disediakan oleh platform tersebut agar pengguna dapat merasa nyaman dan yakin bahwa informasi pribadi mereka dikelola dengan aman dan sesuai dengan peraturan yang berlaku.
        </p>
        <button onclick="history.back()" style="display: block; width: 100px; margin: 20px auto; padding: 10px; background-color: #2c3e50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Kembali</button>
    </div>
</body>
</html>