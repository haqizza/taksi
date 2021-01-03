<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KurirModel;
use App\Models\PengirimanModel;
use App\Models\UserModel;
use App\Models\Model;

class Admin extends Controller{

    protected $kurirModel;
    protected $pengirimanModel;
    protected $userModel;
    protected $session;

    public function __construct(){
        $this->session = session();
        $this->userModel = new UserModel();
        $this->kurirModel = new KurirModel();
        $this->pengirimanModel = new PengirimanModel();
        if($this->session->get('role') != 'admin'){
            return redirect()->to('/');
        }
    }

    public function index(){
        $data['pengiriman'] = $this->pengirimanModel->getOpenedPengiriman();
        echo view('admin/index', $data);
    }
    
    public function data_diri(){
        $idKurir = $this->session->get('id');
        $data['dataDiri'] = $this->kurirModel->getById($idKurir);
        return view('kurir/data-diri', $data);
    }
    
    public function data_kurir(){
        $data['dataKurir'] = $this->kurirModel->getAll();
        return view('admin/data-kurir', $data);
    }
    
    public function data_akun(){
        $data['dataAkun'] = $this->userModel->getAll();
        return view('admin/data-akun', $data);
    }
    
    public function edit_pengiriman($idPengiriman){
        $data['pengiriman'] = $this->pengirimanModel->getById($idPengiriman);
        return view('admin/edit-pengiriman', $data);
    }

    public function update_pengiriman(){
        if($this->request->getmethod() === 'post' && $this->validate([
            'nama_pengirim'=> 'required',
            'alamat_pengirim'=> 'required',
            'telp_pengirim'=> 'required',
            'nama_penerima'=> 'required',
            'alamat_penerima'=> 'required',
            'telp_penerima'=> 'required',
            'nama_barang'=> 'required',
            'ukuran_barang'=> 'required',
            'keterangan'=> 'required',
            'pengiriman'=> 'required',
        ])){

            $data = [
                'kode_pengiriman' =>  $this->request->getVar('kode_pengiriman'),
                'nama_pengirim' =>  $this->request->getVar('nama_pengirim'),
                'alamat_pengirim' =>  $this->request->getVar('alamat_pengirim'),
                'telp_pengirim' =>  $this->request->getVar('telp_pengirim'),
                'nama_penerima' =>  $this->request->getVar('nama_penerima'),
                'alamat_penerima' =>  $this->request->getVar('alamat_penerima'),
                'telp_penerima' =>  $this->request->getVar('telp_penerima'),
                'nama_barang' =>  $this->request->getVar('nama_barang'),
                'ukuran_barang' =>  $this->request->getVar('ukuran_barang'),
                'keterangan' =>  $this->request->getVar('keterangan'),
                'pengiriman' =>  $this->request->getVar('pengiriman'),
                'status_pengiriman' =>  $this->request->getVar('status_pengiriman'),
            ];
            
            $this->pengirimanModel->updatePengiriman($data);

            $data['pengiriman'] = $this->pengirimanModel->getOpenedPengiriman();
            return redirect()->to('/admin/index');
        }
        else
        {
            $data['pengiriman'] = $this->pengirimanModel->getOpenedPengiriman();
            return redirect()->to('/admin/index');
        }
    }

    public function add_kurir(){
        return view('admin/add-kurir');
    }

    public function save_kurir(){
        if($this->request->getmethod() === 'post' && $this->validate([
            'nama_kurir'=> 'required',
            'jk_kurir'=> 'required',
            'alamat_kurir'=> 'required',
            'tgllahir_kurir'=> 'required',
            'telp_kurir'=> 'required',
            'email_kurir'=> 'required',
        ])){

            $this->kurirModel->save([
                'id_kurir'=> $this->request->getVar('id_kurir'),
                'nama_kurir'=> $this->request->getVar('nama_kurir'),
                'jk_kurir'=> $this->request->getVar('jk_kurir'),
                'alamat_kurir'=> $this->request->getVar('alamat_kurir'),
                'tgllahir_kurir'=> $this->request->getVar('tgllahir_kurir'),
                'telp_kurir'=> $this->request->getVar('telp_kurir'),
                'email_kurir'=> $this->request->getVar('email_kurir'),
            ]);

            return redirect()->to('/admin/data_kurir');
        }
        else
        {
            return redirect()->to('/admin/data_kurir');
        }
    }

    public function edit_kurir($idKurir){
        $data['kurir'] = $this->kurirModel->getById($idKurir);
        return view('admin/edit-kurir', $data);
    }

    public function update_kurir(){
        if($this->request->getmethod() === 'post' && $this->validate([
            'nama_kurir'=> 'required',
            'jk_kurir'=> 'required',
            'alamat_kurir'=> 'required',
            'tgllahir_kurir'=> 'required',
            'telp_kurir'=> 'required',
            'email_kurir'=> 'required',
        ])){

            $data = [
                'id_kurir'=> $this->request->getVar('id_kurir'),
                'nama_kurir'=> $this->request->getVar('nama_kurir'),
                'jk_kurir'=> $this->request->getVar('jk_kurir'),
                'alamat_kurir'=> $this->request->getVar('alamat_kurir'),
                'tgllahir_kurir'=> $this->request->getVar('tgllahir_kurir'),
                'telp_kurir'=> $this->request->getVar('telp_kurir'),
                'email_kurir'=> $this->request->getVar('email_kurir'),
            ];
            
            $this->kurirModel->updateKurir($data);

            return redirect()->to('/admin/data_kurir');
        }
        else
        {
            return redirect()->to('/admin/data_kurir');
        }
    }

    public function delete_kurir($idKurir){
        $this->kurirModel->deleteKurir($idKurir);
        return redirect()->to('/admin/data_kurir');
    }

    public function add_akun(){
        $data['kurir'] = $this->kurirModel->getAll();
        return view('admin/add-akun', $data);
    }

    public function save_akun(){
        if($this->request->getmethod() === 'post' && $this->validate([
            'username' => 'required',
            'password' => 'required',
            'kurir' => 'required',
            'role' => 'required',
        ])){

            $this->userModel->save([
                'username'=> $this->request->getVar('username'),
                'password'=> $this->request->getVar('password'),
                'kurir'=> $this->request->getVar('kurir'),
                'role'=> $this->request->getVar('role'),
            ]);

            return redirect()->to('/admin/data_akun');
        }
        else
        {
            return redirect()->to('/admin/data_akun');
        }
    }

    public function edit_akun($idKurir){
        $data['kurir'] = $this->kurirModel->getAll();
        $data['user'] = $this->userModel->getById($idKurir);
        return view('admin/edit-akun', $data);
    }

    public function update_akun(){
        if($this->request->getmethod() === 'post' && $this->validate([
            'username' => 'required',
            'password' => 'required',
            'kurir' => 'required',
            'role' => 'required',
        ])){
            $data = [
                'id_user'=> $this->request->getVar('id_user'),
                'username'=> $this->request->getVar('username'),
                'password'=> $this->request->getVar('password'),
                'kurir'=> $this->request->getVar('kurir'),
                'role'=> $this->request->getVar('role'),
            ];
            
            $this->userModel->updateUser($data);

            return redirect()->to('/admin/data_akun');
        }
        else
        {
            return redirect()->to('/admin/edit_akun');
        }
    }

    public function delete_akun($idAkun){
        $this->userModel->deleteUser($idAkun);
        return redirect()->to('/admin/data_akun');
    }

}