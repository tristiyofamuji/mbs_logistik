<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class JualbelitruckModel extends Model
{
    protected $table = "t_jual_beli";
    protected $allowedFields = ['id','id_pemilik','tgl_transaksi','file_invoice','no_kendaraan','keterangan'];

    public function getData()
    {
        $id_pemilik = session('LT@id');
        $query =  $this->db->table('t_jual_beli a')
        ->join('users b', 'a.id_pemilik = b.id')
        ->select('a.*,b.name as nama')
        ->where('a.id_pemilik',$id_pemilik)
        ->orderBy('a.tgl_transaksi', 'DESC')
        ->get()->getResultArray(); 
        return $query;
    }
}