<?php 
namespace App\Models;

use CodeIgniter\Model;

class Pengiriman extends Model{
  protected $table      = 'pengiriman';
  protected $useTimestamps  = true;
  protected $allowedFields = [
    'kode_pengiriman',
    'nama_pengirim',
    'alamat_pengirim',
    'telp_pengirim',
    'nama_penerima',
    'alamat_penerima',
    'telp_penerima',
    'nama_barang',
    'ukuran_barang',
    'status_pengiriman',
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