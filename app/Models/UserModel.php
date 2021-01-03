<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table         = 'user';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'username',
        'password',
        'kurir',
        'role',
    ];
    
    public function getAll()
    {
        return $this->db->table('user')
        ->join('kurir','user.kurir = kurir.id_kurir')
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
        return $this->where(['id_user' => $id])->first();
    }

    public function updateuser($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->where('id_user', $data['id_user']);
        $builder->update($data);
    }

    public function deleteUser($id)
    {
        $this->where('id_user', $id);
        $this->delete();
    }
}