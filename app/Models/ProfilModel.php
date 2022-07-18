<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class ProfilModel extends Model
{
    protected $table = "t_profil_usaha";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['*'];

    public function getData($id)
    {
        $users =  new UsersModel();
        return $users->find($id);
    }
}