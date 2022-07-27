<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class SopirModel extends Model
{
    protected $table = "t_sopir";
    protected $allowedFields = ['id','nama','telepon','no_whatsapp','alamat','no_kendaraan'];

    public function getGaji()
    {
        $query =  $this->db->table('t_gaji')
        ->join('t_sopir', 't_gaji.id_sopir = t_sopir.id')
         ->orderBy('periode', 'DESC')
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
        $query =  $this->db->table('t_gaji')
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

         var_dump($query);die;
        /* return $query; */
    }
}