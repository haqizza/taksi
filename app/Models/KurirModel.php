<?php 
namespace App\Models;

use CodeIgniter\Model;

class KurirModel extends Model{
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
        return $this->where(['id_kurir' => $id])->first();
    }

    public function updateKurir($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kurir');
        $builder->where('id_kurir', $data['id_kurir']);
        $builder->update($data);
    }

    public function deleteKurir($id)
    {
        $this->where('id_kurir', $id);
        $this->delete();
    }
}