<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'name'];

    public function getData()
    {
        $id = session('LT@id');
        $users =  new UsersModel();
        return $users->find($id);
    }
}