<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KeuanganModel extends Model
{
    protected $table = "t_keuangan";
    protected $allowedFields = ['id','pemasukan', 'pengeluaran', 'tgl_masuk','tgl_keluar','keterangan'];
}