<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class GajisopirModel extends Model
{
    protected $table = "t_gaji";
    protected $allowedFields = ['id','id_sopir','nama','periode','keterangan'];
}