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
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn btn-outline-dark mb-3" style="margin-left:100px">Kembali ke halaman sebelumnya</a>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h1 class="title-main">SehatQu Apotik Online</h1>
                        <p class="text-content">
                            SehatQu Apotik Online adalah solusi apotek modern yang menyediakan berbagai macam obat-obatan dan produk kesehatan dengan sistem pemesanan yang mudah dan konsultasi kesehatan online. Kami memastikan Anda mendapatkan perawatan yang Anda butuhkan dengan nyaman dan cepat. SehatQu mengutamakan kualitas, keamanan, dan kenyamanan dalam setiap layanan yang diberikan, sehingga Anda dapat menjaga kesehatan Anda dengan lebih efisien dan efektif. Dengan tim apoteker berlisensi dan tenaga medis profesional, kami siap memberikan saran yang tepat dan aman sesuai kebutuhan Anda. SehatQu juga menyediakan informasi kesehatan terkini, tips menjaga kesehatan, dan panduan penggunaan obat yang mudah dipahami. Selamat datang di SehatQu Apotik Online, sahabat kesehatan keluarga Anda!
                        </p>
                        <div class="map-container">
                            <h2 class="title-main">Lokasi</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5291261778384!2d107.59124787499667!3d-6.946736393053402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8bee3bd350f%3A0x198c9de6ba46e374!2sSTMIK%20Mardira%20Indonesia!5e0!3m2!1sid!2sid!4v1720286117950!5m2!1sid!2sid" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        