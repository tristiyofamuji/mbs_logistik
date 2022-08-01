<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class DetailgajiModel extends Model
{
    protected $table = "t_detail_gaji";
    protected $allowedFields = ['id','id_sopir','nama','periode','keterangan'];

    public function getGaji($a)
    {
        $query =  $this->db->table('t_detail_gaji a')
        ->select('a.*')
        ->where('a.id_gaji', $a)
        ->orderBy('a.kode', 'DESC')
        ->get()->getResultArray(); 
        return $query;
    }
}