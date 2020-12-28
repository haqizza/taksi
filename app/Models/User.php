<?php 
namespace App\Models;

use CodeIgniter\Model;

class User extends Model{
  protected $table          = 'user';
  protected $useTimestamps  = true;  
  protected $allowedFields = [
    'username',
    'password',
    'kurir',
    'role',
  ];
  
  public function getAll()
  {
    return $this->db->table('user')
      ->join('kurir','user.kurir = kurir.id')
      ->get()->getResultArray();
  }

  public function getKurirList()
  {
    return $this->db->table('kurir')
      ->get()->getResultArray();
  }

  public function getByLoginData($username, $password)
  {
    return $this->where([
        'username' => $username,
        'password' => $password,
    ])->first();
  }

  public function getById($id)
  {
    return $this->where(['id' => $id])->first();
  }
}