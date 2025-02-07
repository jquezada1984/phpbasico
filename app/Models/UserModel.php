<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function ejecutarProcedimiento()
    {
        $query = $this->db->query('SelectCategoria');
        return $query->getResult();
    }
}