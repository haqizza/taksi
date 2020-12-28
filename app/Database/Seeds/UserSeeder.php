<?php 
namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder{
  public function run(){
    $admin = [
      'username'    => 'admin',
      'password'    => 'admin',
      'role'        => 'admin',
    ];
    $kurir = [
      'username'    => 'kurir',
      'password'    => 'kurir',
      'role'        => 'kurir',
    ];
    $this->kurir = date("Y-m-d H:i:s");
    $this->admin = date("Y-m-d H:i:s");
    $this->db->table('user')->insert($admin, $this->admin);
    $this->db->table('user')->insert($kurir , $this->kurir);
  }
}