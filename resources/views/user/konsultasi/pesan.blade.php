<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Konsultasi</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Pesan Konsultasi</h1>
        </div>
        <div class="messages">

            <div class="message received" style="display: block;">
                @foreach ($transaksi as $data)
                    <div class="content" style="text-align: center;margin-bottom:10px">
                        <p class="text">Halo Pasien</p>
                        <p class="text">Konsultasi Kamu Akan segera kami proses</p>
                        <table border="1" cellpadding="10" cellspacing="0"
                            style="text-align: center;margin-left:50px">
                            <tr>
                                <td>nama_pasien</td>
                                <td>Alamat</td>
                                <td>Obat</td>
                                <td>Harga Obat</td>
                                <td>Dokter</td>
                                <td>Harga konsultasi</td>
                                <td>pemeriksaan</td>
                                <td>Total</td>
                            </tr>
                            <tr>
                                <td>{{ $data->Pasien->nama_pasien }}</td>
                                <td>{{ $data->Pasien->alamat }}</td>
                                <td>{{ $data->Obat->nama_obat }}</td>
                                <td>{{ number_format($data->Obat->harga) }}</td>
                                <td>{{ $data->Dokter->nama_dokter }}</td>
                                <td>{{ number_format($data->Dokter->harga_konsultasi) }}</td>
                                <td>{{ $data->pemeriksaan }}</td>
                                <td>{{ number_format($data->total) }}</td>
                            </tr>
                        </table>
                        <span class="time">{{ $data->created_at->diffForHumans() }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="footer">
            <a href="/home">Back</a>
        </div>
    </div>
</body>

</html>
