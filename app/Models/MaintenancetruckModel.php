<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MaintenancetruckModel extends Model
{
    protected $table = "t_maintenance_truck";
    protected $allowedFields = ['id','id_sopir', 'tgl_transaksi', 'no_kendaraan','total_biaya','keterangan'];
    
    public function getData()
    {
        $id_pemilik = session('LT@id');
        $query =  $this->db->table('t_maintenance_truck a')
        ->join('t_sopir b', 'a.id_sopir = b.id')
        ->select('a.id,a.id_sopir,a.tgl_transaksi,a.no_kendaraan,a.total_biaya,a.keterangan,b.nama,b.no_kendaraan AS no_sopir,b.alamat')
        ->where('b.id_pemilik',$id_pemilik)
        ->orderBy('b.nama', 'ASC')
        ->get()->getResultArray(); 
        return $query;
    }
}