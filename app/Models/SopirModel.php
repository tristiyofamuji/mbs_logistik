<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class SopirModel extends Model
{
    protected $table = "t_sopir";
    protected $allowedFields = ['id','nama','telepon','no_whatsapp','alamat','no_kendaraan'];
}