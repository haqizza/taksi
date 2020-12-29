<?php 
namespace App\Database\Seeds;

class PembayaranSeeder extends \CodeIgniter\Database\Seeder{
  public function run(){
    $data1 = [
      'nama_pembayaran'    => 'Tunai',
      'nomor_pembayaran'    => '0',
    ];
    $data2 = [
      'nama_pembayaran'    => 'OVO',
      'nomor_pembayaran'    => '091236123',
    ];
    $data3 = [
      'nama_pembayaran'    => 'Dana',
      'nomor_pembayaran'    => '012963831',
    ];
    $data4 = [
      'nama_pembayaran'    => 'Transfer BNI',
      'nomor_pembayaran'    => '007163827',
    ];
    $data5 = [
      'nama_pembayaran'    => 'Transfer BRI',
      'nomor_pembayaran'    => '09725172100111',
    ];
    $data6 = [
      'nama_pembayaran'    => 'Transfer BCA',
      'nomor_pembayaran'    => '009172615126',
    ];
    $date = date("Y-m-d H:i:s");
    $this->db->table('pembayaran')->insert($data1, $date);
    $this->db->table('pembayaran')->insert($data2, $date);
    $this->db->table('pembayaran')->insert($data3, $date);
    $this->db->table('pembayaran')->insert($data4, $date);
    $this->db->table('pembayaran')->insert($data5, $date);
    $this->db->table('pembayaran')->insert($data6, $date);
  }
}