<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class OrderModel extends Model
{
    protected $table = "t_profil_usaha";
    protected $allowedFields = ['id_pemilik','nama_usaha','alamat','email','telepon','npwp','no_sk','keterangan'];
}