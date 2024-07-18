<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatqu Apotik Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f3f8fb;">

    <nav class="navbar navbar-expand-lg" style="background-color: #3a3a3a; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: #ffffff !important;">Sehatqu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="tentang" style="color: #ffffff !important;">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #ffffff !important;">Kelayakan</a>
                    </li> --}}
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login" style="color: #ffffff !important;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section"
        style="background: linear-gradient(to right, #00c6ff, #0072ff); padding: 5rem 0; color: #ffffff; text-align: center; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <h1 style="font-size: 3rem; font-weight: bold;">Solusi Kesehatan Terlengkap</h1>
            <p style="font-size: 1.2rem; margin: 1rem 0;">Chat dokter, kunjungi toko kesehatan, beli obat, dan update
                informasi seputar kesehatan, semua bisa di Sehatqu!</p>
            <a href="/login" class="btn btn-primary"
                style="background-color: #ffffff; color: #0072ff; border: none; padding: 0.8rem 1.5rem; border-radius: 5px; font-weight: bold; transition: background-color 0.3s, box-shadow 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Login</a>
        </div>
    </div>

    <div class="service-section" style="padding: 4rem 0; background-color: #ffffff; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item" onclick="alert('Konsul dengan Dokter Harus Login!');"
                        style="margin-bottom: 2rem; transition: transform 0.3s, box-shadow 0.3s; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #f9f9f9; cursor: pointer;">
                        <div class="service-icon" style="font-size: 3rem; color: #0072ff; margin-bottom: 1rem;">💬
                        </div>
                        <div class="service-title" style="font-size: 1.5rem; font-weight: bold; color: #333333;">
                            Konsultasi dengan Dokter</div>
                        <div class="service-description" style="font-size: 1rem; color: #666666;">Konsultasi dengan
                            dokter profesional kapan saja dan
                            di mana saja.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item" onclick="alert('Toko Kesehatan Harus Login!');"
                        style="margin-bottom: 2rem; transition: transform 0.3s, box-shadow 0.3s; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #f9f9f9; cursor: pointer;">
                        <div class="service-icon" style="font-size: 3rem; color: #0072ff; margin-bottom: 1rem;">🏪
                        </div>
                        <div class="service-title" style="font-size: 1.5rem; font-weight: bold; color: #333333;">Toko
                            Kesehatan</div>
                        <div class="service-description" style="font-size: 1rem; color: #666666;">Beli obat dan alat
                            kesehatan dengan mudah dan
                            aman.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item" onclick="alert('Info Terkini Kesehatan Harus Login!');"
                        style="margin-bottom: 2rem; transition: transform 0.3s, box-shadow 0.3s; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #f9f9f9; cursor: pointer;">
                        <div class="service-icon" style="font-size: 3rem; color: #0072ff; margin-bottom: 1rem;">📋
                        </div>
                        <div class="service-title" style="font-size: 1.5rem; font-weight: bold; color: #333333;">Info
                            Terkini Kesehatan</div>
                        <div class="service-description" style="font-size: 1rem; color: #666666;">Nantikan info terkini
                            pada dunia kesehatan.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer"
        style="background-color: #3a3a3a; color: #ffffff; padding: 1rem 0; text-align: center; box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <p>© 2024 Sehatqu Apotik Online. All rights reserved.</p>
            <p><a href="kebijakan" style="color: #ffffff; text-decoration: none;">Kebijakan Priivasi</a> | <a href="#"
                    style="color: #ffffff; text-decoration: none;">Tentang kami</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
