<?php 
namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model{
  protected $table          = 'pembayaran';
  protected $useTimestamps  = true;  
  protected $allowedFields = [
    'nama_pembayaran',
    'nomor_pembayaran',
  ];
  
  public function getAll()
  {
    return $this->findAll();
  }

  public function getById($id)
  {
    return $this->where(['id_pembayaran' => $id])->first();
  }
}