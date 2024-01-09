<?php
namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'kontak', 'jumlah_sesi', 'tutor_dipilih', 'total_harga'];
}

