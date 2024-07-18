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

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Rekomendasi Resep Sayur Bening Bayam</h1>
                <hr>
                <p>Beberapa resep sayur bening ini memiliki rasa yang segar dan ringan. Dengan menggunakan bahan-bahan seperti sayuran hijau segar, kaldu lezat, dan bumbu-bumbu yang disajikan dalam kuah yang jernih, sayur bening memberikan sensasi segar dan menyegarkan pada lidah.</p>
                <p>Sayur bening dapat disesuaikan dengan bahan-bahan yang tersedia. Kamu dapat mengombinasikan berbagai sayuran sesuai dengan preferensi. Ini memungkinkan kamu untuk mengolah <a href="https://www.halodoc.com/artikel/ini-manfaat-sawi-putih-untuk-kesehatan" target="_blank" rel="noreferrer noopener">sayur bening</a> dengan variasi rasa yang berbeda setiap kali.</p>
                <p>Nah, apa saja resep sayur bening bayam yang <em>simple</em> dan menggiurkan?</p>
                <h2 id="h-rekomendasi-resep-sayur-bening-bayam"><strong>Rekomendasi Resep Sayur Bening Bayam</strong></h2>
                <p><a href="https://www.halodoc.com/kesehatan/menu-sehat" target="_blank" rel="noreferrer noopener">Sayur bening</a> merupakan hidangan yang relatif mudah dan cepat dalam persiapan. Dalam waktu singkat, kamu dapat mengolah sayur bening yang lezat dan menyehatkan untuk dinikmati bersama keluarga.</p>
                <p>Selain itu, kalori dalam sayur bayam cukup rendah. Dalam 100 gram bayam mentah, terdapat sekitar 23 kalori.</p>
                <p>Bayam juga kaya akan nutrisi seperti vitamin A, vitamin C, vitamin K, asam folat, zat besi, dan serat, yang membuatnya menjadi pilihan yang sangat baik untuk diet sehat.</p>
                <p>Berikut adalah rekomendasi resep sayur bening bayam:</p>
                <h3 id="h-1-sayur-bening-bayam-dengan-jagung-manis"><strong>1. Sayur bening bayam dengan jagung manis</strong></h3>
                <p><strong>Bahan-bahan:</strong></p>
                <ul>
                    <li>1 ikat bayam, petik daunnya.</li>
                    <li>1 buah jagung manis, pipil bijinya.</li>
                    <li>2 siung bawang putih, cincang halus.</li>
                    <li>500 ml kaldu ayam.</li>
                    <li>Garam secukupnya.</li>
                    <li>Merica secukupnya.</li>
                    <li>Minyak goreng secukupnya untuk menumis.</li>
                </ul>
                <p><strong>Cara membuat:</strong></p>
                <ol>
                    <li>Panaskan minyak goreng dalam wajan, tumis bawang putih hingga harum.</li>
                    <li>Tambahkan jagung manis, aduk rata.</li>
                    <li>Tuang kaldu ayam, biarkan mendidih.</li>
                    <li>Masukkan bayam, aduk hingga layu.</li>
                    <li>Beri garam dan merica secukupnya sesuai selera.</li>
                    <li>Masak hingga semua bahan matang dan kuah bening.</li>
                    <li>Angkat dan sajikan.</li>
                </ol>
                <h3 id
