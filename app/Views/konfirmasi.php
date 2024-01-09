<!-- File: views/pembayaran/konfirmasi.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <!-- Sertakan Bootstrap CSS atau gaya sesuai kebutuhan -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 50px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Konfirmasi Pembayaran</h2>

        <!-- Informasi Pembayaran -->
        <p><strong>Nama:</strong> <?= $nama ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Nomor Kontak:</strong> <?= $kontak ?></p>
        <p><strong>Jumlah Sesi:</strong> <?= $jumlahSesi ?></p>
        <p><strong>Tutor Dipilih:</strong> <?= $tutorDipilih ?></p>
        <p><strong>Total Harga:</strong> Rp. <?= number_format($totalHarga) ?></p>

        <!-- Status Pembayaran -->
        <p><strong>Status Pembayaran:</strong> Dalam Proses</p>
        <p><strong>ID Transaksi:</strong> <?= $idTransaksi ?></p>

        <!-- Rincian Pembayaran -->
        <p><strong>Metode Pembayaran:</strong> Midtrans</p>
        <p><strong>Tanggal Transaksi:</strong> <?= date('Y-m-d H:i:s') ?></p>

        <!-- Instruksi Tambahan -->
        <p>Terima kasih telah melakukan pembayaran. Pembayaran Anda sedang diproses.</p>

        <!-- Tombol Kembali atau Tautan Lainnya -->
        <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
    </div>

    <!-- Sertakan Bootstrap JS dan jQuery (opsional, sesuaikan dengan kebutuhan proyek Anda) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
