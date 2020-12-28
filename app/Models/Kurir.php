<?php 
namespace App\Models;

use CodeIgniter\Model;

class Kurir extends Model{
  protected $table          = 'kurir';
  protected $useTimestamps  = true;  
  protected $allowedFields = [	
    'id_kurir',
    'nama_kurir',
    'jk_kurir',
    'tgllahir_kurir',
    'alamat_kurir',
    'telp_kurir',
    'email_kurir',
  ];
  
  public function getAll()
  {
    return $this->findAll();
  }

  public function getById($id)
  {
    return $this->where(['id' => $id])->first();
  }
}