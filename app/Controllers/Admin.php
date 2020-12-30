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
        $this->kurirModel = new KurirModel();
        $this->pengirimanModel = new PengirimanModel();
    }

    public function index(){
        $data['pengiriman'] = $this->pengirimanModel->getOpenedPengiriman();
        echo view('admin/index', $data);
    }
    
    public function take($idPengiriman){
        $idKurir = $this->session->get('id');
        $this->pengirimanModel->updateKurir($idPengiriman, $idKurir);
        
        return redirect()->to('/admin');
    }

    public function pengiriman_saya(){
        $idKurir = $this->session->get('id');
        $data['pengiriman'] = $this->pengirimanModel->getPengirimanKurir($idKurir);
        return view('admin/admin-pengiriman', $data);
    }
    
    public function change_state(){
        $this->request->getmethod() === 'post';
        $idPengiriman = $this->request->getVar('id_pengiriman');
        $state = $this->request->getVar('status_pengiriman');
        
        $this->pengirimanModel->changeState($idPengiriman, $state);
        
        return redirect()->to('/admin/pengiriman_saya');
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
}