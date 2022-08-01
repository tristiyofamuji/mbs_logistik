<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class GajisopirModel extends Model
{
    protected $table = "t_gaji";
    protected $allowedFields = ['id','id_sopir','nama','periode','keterangan'];

    public function getGaji($id)
    {
        $query =  $this->db->table('t_gaji a')
        ->join('t_sopir b', 'a.id_sopir = b.id')
        ->select('a.*,b.nama,b.no_kendaraan,b.alamat')
        ->where('a.id',$id)
        ->orderBy('a.periode', 'DESC')
        ->get()->getResultArray(); 
        return $query;
    }
}