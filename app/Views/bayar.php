<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran</title>
    <!-- Sertakan Bootstrap CSS -->
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
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Pembayaran Kursus</h2>

        <!-- Formulir Pemesanan -->
        <form method="post" action="/bayar">
            <!-- Pilihan tutor menggunakan radio button -->
            <div class="form-group">
                <label>Pilih Tutor:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tutor" value="Bruno Alves" checked>
                    <label class="form-check-label">Bruno Alves</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tutor" value="Jacob Scott">
                    <label class="form-check-label">Jacob Scott</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tutor" value="Rick Grimss">
                    <label class="form-check-label">Rick Grimss</label>
                </div>
            </div>

           
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
            </div>
            <div class="form-group">
                <label for="kontak">Nomor Kontak:</label>
                <input type="tel" class="form-control" id="kontak" name="kontak" placeholder="Masukkan nomor kontak Anda" required>
            </div>
            <div class="form-group">
                <label for="jumlahSesi">Jumlah Sesi:</label>
                <input type="number" class="form-control" id="jumlahSesi" name="jumlahSesi" min="1" value="1" required>
            </div>

            <!-- ... (formulir lainnya) -->
            <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
        </form>
    </div>

    <!-- Script untuk menangkap nilai parameter tutor dan mengatur radio button -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil nilai parameter tutor dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const tutor = urlParams.get('tutor');

        // Cek jika tutor dari URL ada
        if (tutor) {
            // Setel nilai radio button sesuai dengan tutor yang dipilih
            const radioTutor = document.querySelector(`input[name="tutor"][value="${tutor}"]`);
            if (radioTutor) {
                radioTutor.checked = true;
            }
        }
    });
</script>


    <!-- Sertakan Bootstrap JS dan jQuery (opsional, sesuaikan dengan kebutuhan proyek Anda) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
