<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PajakdansimModel extends Model
{
    protected $table = "t_pajak_sim";
    protected $allowedFields = ['id','id_sopir','jenis_surat','jenis_kendaraan','masa_berlaku','wilayah','keterangan'];

    public function getData()
    {
        $id_pemilik = session('LT@id');
        $query =  $this->db->table('t_pajak_sim a')
        ->join('t_sopir b', 'a.id_sopir = b.id')
        ->select('a.id,a.jenis_surat,a.jenis_kendaraan,a.masa_berlaku,a.wilayah,a.keterangan,b.id as id_sopir,b.nama,b.no_kendaraan,b.alamat')
        ->where('b.id_pemilik',$id_pemilik)
        ->orderBy('b.nama', 'ASC')
        ->get()->getResultArray(); 
        return $query;
    }
}