<?php

namespace App\Controllers;

use App\Models\PembayaranModel;
use Midtrans\Config;
use Midtrans\Snap;

class PembayaranController extends BaseController
{
    public function prosesPembayaran()
    {
     
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $kontak = $this->request->getPost('kontak');
        $jumlahSesi = $this->request->getPost('jumlahSesi');
        $tutorDipilih = $this->request->getPost('tutor');

        $hargaTutor = [
            'Bruno Alves' => 1,
            'Jacob Scott' => 2000,
            'Rick Grimss' => 3000,
        ];

        $hargaTutorDipilih = $hargaTutor[$tutorDipilih];

        // Hitung total harga
        $totalHarga = $jumlahSesi * $hargaTutorDipilih;

        // Simpan data pembayaran ke database menggunakan model
        $pembayaranModel = new PembayaranModel();
        $dataPembayaran = [
            'nama' => $nama,
            'email' => $email,
            'kontak' => $kontak,
            'jumlah_sesi' => $jumlahSesi,
            'tutor_dipilih' => $tutorDipilih,
            'total_harga' => $totalHarga,
            'status' => 'Belum Dibayar',
        ];

        $pembayaranModel->insert($dataPembayaran);

        // Set konfigurasi Midtrans
        Config::$serverKey = 'Mid-server-LvZz-EDaDXX16jR56FQlPWaT'; 
        Config::$isProduction = true;

        // Buat transaksi Snap Midtrans
        $transactionDetails = [
            'order_id' => 'ORDER-' . time(),
            'gross_amount' => $totalHarga,
        ];

        $customerDetails = [
            'first_name' => $nama,
            'email' => $email,
            'phone' => $kontak,
        ];

        $params = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        try {
            $paymentUrl = Snap::createTransaction($params)->redirect_url;
            return redirect()->to('/pembayaran/konfirmasi');
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function konfirmasiPembayaran()
    {
     
        return view('pembayaran/konfirmasi');
    }

    public function bayar()
    {
        // Ambil data dari formulir POST
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $kontak = $this->request->getPost('kontak');
        $jumlahSesi = $this->request->getPost('jumlahSesi');
        $tutorDipilih = $this->request->getPost('tutor');

       
        $hargaTutor = [
            'Bruno Alves' => 1,
            'Jacob Scott' => 2000,
            'Rick Grimss' => 3000,
        ];

        $hargaTutorDipilih = $hargaTutor[$tutorDipilih];

        
        $totalHarga = $jumlahSesi * $hargaTutorDipilih;

        Config::$serverKey = 'Mid-server-LvZz-EDaDXX16jR56FQlPWaT'; 
        Config::$isProduction = true;

        
        $transactionDetails = [
            'order_id' => 'ORDER-' . time(),
            'gross_amount' => $totalHarga, // 
        ];

        $customerDetails = [
            'first_name' => $nama,
            'email' => $email,
            'phone' => $kontak,
        ];

        $params = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        try {
            // Membuat URL pembayaran dengan Midtrans Snap
            $paymentUrl = Snap::createTransaction($params)->redirect_url;

            // Simpan data pembayaran ke database menggunakan model
            $pembayaranModel = new PembayaranModel();
            $dataPembayaran = [
                'nama' => $nama,
                'email' => $email,
                'kontak' => $kontak,
                'jumlah_sesi' => $jumlahSesi,
                'tutor_dipilih' => $tutorDipilih,
                'total_harga' => $totalHarga,
                'status' => 'Belum Dibayar', // Misalnya, status pembayaran awal
            ];

            $pembayaranModel->insert($dataPembayaran);
            return redirect()->to($paymentUrl);
        } catch (\Exception $e) {
            // Handle kesalahan pembuatan transaksi
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function midtransCallback()
{
    
    log_message('info', 'Midtrans Callback Triggered');
    // Redirect pengguna ke halaman utama
    return redirect()->to('/');
}
}