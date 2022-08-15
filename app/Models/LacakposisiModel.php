<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class LacakposisiModel extends Model
{
    protected $table = "t_lacak_posisi";
    protected $allowedFields = ['id','id_sopir','posisi_gps','keterangan'];

    public function getData()
    {
        $id_pemilik = session('LT@id');
        $query =  $this->db->table('t_lacak_posisi a')
        ->join('t_sopir b', 'a.id_sopir = b.id')
        ->select('a.*,b.nama,b.no_kendaraan,b.alamat')
        ->where('b.id_pemilik',$id_pemilik)
        ->get()->getResultArray(); 
        return $query;
    }
}