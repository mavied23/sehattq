<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengenal Tes Urinalisis dan Penyakit yang Bisa Dideteksi</title>
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
                <h1 class="mb-4">Mengenal Tes Urinalisis dan Penyakit yang Bisa Dideteksi</h1>
                <hr>
                



<p>Pemeriksaan ini disebut dengan urinalisis. Protein dalam urine bisa menjadi tanda penyakit ginjal. </p>



<p>Namun, hasil urinalisis normal tidak menjamin bahwa seseorang&nbsp; tidak memiliki penyakit ginjal kronis. Nah, mau tahu selengkapnya mengenai urinalisis? Berikut ulasannya!</p>



<h2 id="h-1"><strong>Apa yang Dimaksud dengan Urinalisis?&nbsp;</strong></h2>



<p><a href="https://www.halodoc.com/kesehatan/tes-urine">Pemeriksaan urinalisis</a> biasanya dilakukan sebagai bagian dari evaluasi kesehatan atau untuk mendeteksi berbagai masalah kesehatan. Proses urinalisis melibatkan pengambilan sampel urine dari pasien, biasanya dengan cara buang air kecil ke dalam wadah khusus.&nbsp;&nbsp;</p>



<p>Urinalisis melibatkan pemeriksaan penampilan, konsentrasi, dan kandungan urine. Misalnya, infeksi saluran kemih (ISK) bisa membuat urine terlihat keruh, bukan bening. </p>



<p>Sementara itu, kadar protein yang tinggi dalam urine bisa menjadi tanda penyakit ginjal.</p>



<p>Urinalisis berguna untuk mendeteksi dan mengelola berbagai gangguan kesehatan. Contohnya seperti infeksi atau masalah pada ginjal hingga gula darah tinggi.</p>



<h2 id="h-2"><strong>Penyakit yang Bisa Dideteksi dengan Urinalisis</strong></h2>



<p>Melakukan tes urine atau urinalisis adalah salah satu cara paling dasar untuk menilai kesehatan tubuh. </p>



<p>Pemeriksaan ini bisa kamu gunakan sebagai bagian dari <em>medical check up</em>, mendiagnosis kondisi medis tertentu, atau memantau kondisi dan pengobatan yang tengah kamu jalani.&nbsp;</p>



<p>Nah, berikut ini beberapa penyakit yang bisa dokter deteksi dengan menjalani urinalisis:</p>



<h3><strong>1. Infeksi Saluran Kemih (ISK)</strong></h3>



<p><a href="https://www.halodoc.com/kesehatan/infeksi-saluran-kemih">Infeksi saluran kemih</a> (ISK) sangat umum terjadi pada pria dan wanita. Beberapa orang berpikir bahwa ISK hanya masalah bagi wanita, tapi ini juga bisa terjadi pada pria. </p>



<p>Salah satu cara untuk mendeteksinya adalah dengan tes urine.&nbsp;Gejala yang paling umum adalah rasa terbakar saat buang air kecil, terutama saat berhubungan seksual, buang air kecil yang menyakitkan, darah, atau urine yang berbau tajam. Penyakit ini biasanya terjadi akibat bakteri <em>E. coli</em>.</p>



<h3><strong>2. Kanker</strong></h3>



<p>Urinalisis adalah salah satu metode skrining kanker yang paling umum dan murah. Pemeriksaan ini dapat mendeteksi adanya kanker dalam tubuh pada stadium awal.</p>



<p>Beberapa jenis kanker yang bisa terdeteksi dengan tes ini adalah kanker pada kandung kemih, ureter, dan ginjal. Darah dalam urine merupakan indikator kuat dari beberapa penyakit dalam tubuh. Baik infeksi saluran kemih, batu ginjal, atau bahkan dalam beberapa kasus kanker.</p>



<h3><strong>3. Mendeteksi penyebab tekanan darah tinggi</strong></h3>



<p>Pengujian katekolamin dalam urine dapat membantu mengidentifikasi tekanan darah tinggi karena kelebihan produksi hormon atau metabolitnya. </p>



<p>Ini dapat kamu lihat pada kondisi seperti Pheochromocytoma yakni saat tumor di kelenjar adrenal menyebabkan produksi adrenalin dan/atau noradrenalin yang berlebihan sehingga meningkatkan tekanan darah.</p>



<h3><strong>4. Penyakit menular seksual</strong></h3>



<p>Urinalisis rutin dapat mengungkapkan adanya organisme yang menyebabkan penyakit menular seksual seperti trikomoniasis. </p>



<p>Namun, tentunya ada beberapa pemeriksaan lain yang juga kamu perlukan untuk menegakkan diagnosis.</p>



<p>Pemeriksaan tersebut termasuk tes hitung darah lengkap yang mencakup tingkat sedimentasi eritrosit (ESR) dan urinalisis yang mungkin termasuk kultur urine.&nbsp;</p>



<h3><strong>5. Mikroalbuminuria</strong></h3>



<p>Mikroalbuminuria adalah suatu kondisi yang muncul dengan adanya peningkatan kadar albumin dalam urine. Ini adalah kondisi prekursor untuk nefropati diabetik dan penyakit kardiovaskular pada diabetes mellitus tipe 2.&nbsp;</p>



<p>Tes untuk mikroalbuminuria perlu kamu lakukan lebih sering dalam beberapa tahun pertama setelah pemeriksaan diabetes tipe 2. Ini penting dalam pencegahan End-Stage Renal Disease (ESRD) adalah rasio Mikroalbumin: Kreatinin.</p>



<p>Tes rasio kreatinin memberikan informasi tentang laju filtrasi glomerulus (GFR) dan adanya penyakit ginjal yang sudah ada sebelumnya. Rasio mikroalbumin: kreatinin 30-300 mg/g (30-300 mg/g kreatinin), sebagai indikator awal penyakit ginjal.&nbsp;</p>



<p>Jika kamu memiliki mikroalbuminuria, bukan berarti kamu memiliki penyakit ginjal. Namun, penting untuk berkonsultasi dengan dokter karena mungkin kamu perlu menjalani tes lainnya untuk memastikan diagnosis.</p>



<h3><strong>6. Diabetes</strong></h3>



<p>Hasil kadar gula atau glukosa yang tinggi pada urine bisa menunjukkan penyakit ini. Selain cek urine, dokter juga akan melakukan tes darah untuk mendiagnosis diabetes.</p>



<h3><strong>7. Masalah ginjal</strong></h3>



<p>Urine yang mengandung sel darah merah, sel darah putih, protein, dan tampak kemerahan atau gelap seperti teh, bisa menjadi tanda adanya gangguan atau masalah pada fungsi ginjal.</p>



<h3><strong>8. Gangguan hati</strong></h3>



<p>Bila hasil urinalisis menunjukkan kadar bilirubin yang tinggi dalam urin, hal itu bisa mengindikasikan gangguan hati. Kamu mungkin memerlukan beberapa pemeriksaan tambahan untuk memastikan diagnosis.</p>



<h3><strong>9. Dehidrasi</strong></h3>



<p>Urine cenderung lebih gelap dan memiliki berat jenis yang lebih tinggi ketika seseorang tidak minum cukup cairan. Urine lebih ringan dan memiliki berat jenis lebih rendah ketika seseorang terhidrasi dengan baik.&nbsp;</p>



<p>Baca juga artikel <a href="https://www.halodoc.com/artikel/9-penyakit-yang-bisa-dicek-melalui-tes-urinalisis">9 Penyakit yang Bisa Dicek Melalui Tes Urinalisis</a> untuk informasi jelasnya lagi.</p>



<h2 id="h-3"><strong>Fungsi Urinalisis&nbsp;</strong></h2>



<p>Urine dapat mendeteksi kerusakan organ tubuh tertentu, seperti ginjal, ureter, kandung kemih, ataupun uretra. Tes urinalisis dapat membantu mengetahui kemungkinan gangguan penyakit.</p>



<p>Selain itu, ada beberapa fungsi urinalisis lain, yaitu:</p>



<h3><strong>1. Mengetahui kemungkinan adanya zat berbahaya dalam tubuh</strong></h3>



<p>Tes urinalisis kerap menjadi syarat untuk masuk sekolah, akademi, ataupun&nbsp; kepegawaian. Sebab, tes ini dapat mendeteksi ada tidaknya zat berbahaya seperti ganja, kokain, ataupun obat terlarang lainnya dalam urine seseorang.</p>



<h3><strong>2. Membantu mendiagnosis penyakit</strong></h3>



<p>Tes ini dapat menunjang diagnosis lain seperti diabetes, batu ginjal, ataupun infeksi saluran kemih. Biasanya dokter juga akan merekomendasikan untuk melakukan urinalisis bila seseorang mengalami nyeri di punggung bawah.</p>



<h3><strong>3. Mengawasi perkembangan penyakit</strong></h3>



<p>Tak hanya menegakkan diagnosis, tes urinalisis juga digunakan untuk mengawasi kondisi penyakit. Ini termasuk mengetahui respons tubuh terhadap pengobatan yang dilakukan.</p>



<h3><strong>&nbsp;4. Tes kehamilan&nbsp;</strong></h3>



<p>Urinalisis juga bermanfaat untuk mengetahui kehamilan positif atau negatif. Alat uji kehamilan akan dimasukkan ke dalam wadah yang sudah diisi urine untuk mendeteksi hormon kehamilan.</p>



<h3><strong>5. Pengecekan rutin</strong></h3>



<p>Urinalisis juga bisa digunakan untuk pengecekan rutin kondisi kesehatan. Informasi selengkapnya mengenai cara melakukan prosedur ini bisa kamu baca di artikel ini: <a href="https://www.halodoc.com/artikel/apa-saja-yang-perlu-diketahui-mengenai-tes-urine">“Apa Saja yang Perlu Diketahui Mengenai Tes Urine?</a>”.</p>



