<?php 
namespace App\Models;

use CodeIgniter\Model;

class PengirimanModel extends Model{
    protected $table = 'pengiriman';
    protected $useTimestamps = true;
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
        'foto',
        'keterangan',
        'pengiriman',
        'cara_pembayaran',
        'status_pengiriman',
    ];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getOpenedPengiriman()
    {
        return $this->where('kurir is NULL')->findAll();
    }

    public function getPengirimanKurir($idKurir)
    {
        return $this->where('kurir', $idKurir)->findAll();
    }
    
    public function getById($idPengiriman)
    {
        return $this->where(['id_pengiriman' => $idPengiriman])->first();
    }

    public function getByKode($kode)
    {
        return $this->where(['kode_pengiriman' => $kode])->first();
    }

    public function updatePengiriman($data)
    {   
        $db = \Config\Database::connect();
        $builder = $db->table('pengiriman');
        $builder->where('kode_pengiriman', $data['kode_pengiriman']);
        $builder->update($data);
    }

    public function updateKurir($idPengiriman, $idKurir)
    {   
        $db = \Config\Database::connect();
        $builder = $db->table('pengiriman');
        $data = [
            'status_pengiriman' => 'sedang dijemput',
            'kurir' => $idKurir,
        ];
        $builder->where('id_pengiriman', $idPengiriman);
        $builder->update($data);
    }

    public function changeState($idPengiriman, $state){
        $data = [
            'status_pengiriman' => $state,
        ];
        $db = \Config\Database::connect();
        $builder = $db->table('pengiriman');
        $builder->where('id_pengiriman', $idPengiriman);
        $builder->update($data);
    }
}