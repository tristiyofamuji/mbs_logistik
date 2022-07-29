<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class SopirModel extends Model
{
    protected $table = "t_sopir";
    protected $allowedFields = ['id','nama','telepon','no_whatsapp','alamat','no_kendaraan'];

    public function getGaji()
    {
        $query =  $this->db->table('t_gaji a')
        ->join('t_sopir b', 'a.id_sopir = b.id')
        ->select('a.*,b.nama,b.no_kendaraan,b.alamat')
         ->orderBy('a.periode', 'DESC')
         ->get()->getResultArray(); 
        return $query;
    }

    public function saveGaji($data_gaji) {
        $this->db->table('t_detail_gaji')->insert($data_gaji);
        return TRUE;
    }

    public function updateGaji($data_gaji) {
        $this->db->table('t_detail_gaji')->insert($data_gaji);
        return TRUE;
    }

    public function editGaji($id)
    {
        $query =  $this->db->table('t_gaji a')
        ->select('*')
         ->where('id',$id)
         ->get()->getResultArray();
        return $query;
    }

    public function getDetailGaji()
    {             
        $id_pemilik = session('LT@id');
        $query =  $this->db->table('t_detail_gaji')
         ->join('t_gaji', 't_detail_gaji.id_gaji = t_gaji.id')
         ->get()->getResultArray(); 

        /* return $query; */
    }
}