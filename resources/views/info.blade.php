<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatqu Apotik Online</title>
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

    <br><br>
    <div class="container">
        <h1 class="mb-4">Artikel Terbaru</h1>
        <div class="row">
            <div class="col-md-4 mb-4" onclick="location.href='{{ url('/artikel1') }}'">
                <div class="card">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">9 Resep Sayur Bening Bayam yang Lezat dan Mudah Dibuat di Rumah </h5><br><br>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Read more <<--</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" onclick="location.href='{{ url('/artikel2') }}'">
                <div class="card">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mengenal Tes Urinalisis dan Penyakit yang Bisa Dideteksi </h5> <br><br>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Read more <<--</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" onclick="location.href='{{ url('/artikel3') }}'">
                <div class="card">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ini Berbagai Penyebab Pria Mengalami Disfungsi Ereksi </h5><br><br>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Read more <<--</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" onclick="location.href='{{ url('/artikel4') }}'">
                <div class="card">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">9 Obat Herbal yang Ampuh Atasi Sakit Lutut dan Sendi </h5><br><br>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Read more <<--</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" onclick="location.href='{{ url('/artikel5') }}'">
                <div class="card">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ini 5 Fakta Mengenai Depresi yang Perlu untuk Diketahui </h5><br><br>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Read more <<--</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" onclick="location.href='{{ url('/artikel6') }}'">
                <div class="card">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ini 5 Alasan Gen Z Lebih Rentan Terhadap Gangguan Mental</h5><br><br>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Read more <<--</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        feather.replace();
    </script>
</body>

</html>