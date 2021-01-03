<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KurirModel;
use App\Models\PengirimanModel;
use App\Models\Model;

class Kurir extends Controller{
    protected $kurirModel;
    protected $pengirimanModel;
    protected $session;

    public function __construct(){
        $this->session = session();
        $this->kurirModel = new KurirModel();
        $this->pengirimanModel = new PengirimanModel();
        if($this->session->get('role') != 'kurir'){
            return redirect()->to('/');
        }
    }

    public function index(){
        $data['pengiriman'] = $this->pengirimanModel->getOpenedPengiriman();
        echo view('kurir/index', $data);
    }
    
    public function take($idPengiriman){
        $idKurir = $this->session->get('id');
        $this->pengirimanModel->updateKurir($idPengiriman, $idKurir);
        
        return redirect()->to('/kurir');
    }

    public function pengiriman_saya(){
        $idKurir = $this->session->get('id');
        $data['pengiriman'] = $this->pengirimanModel->getPengirimanKurir($idKurir);
        return view('kurir/kurir-pengiriman', $data);
    }
    
    public function change_state(){
        $this->request->getmethod() === 'post';
        $idPengiriman = $this->request->getVar('id_pengiriman');
        $state = $this->request->getVar('status_pengiriman');
        
        $this->pengirimanModel->changeState($idPengiriman, $state);
        
        return redirect()->to('/kurir/pengiriman_saya');
    }
    
    public function data_diri(){
        $idKurir = $this->session->get('id');
        $data['dataDiri'] = $this->kurirModel->getById($idKurir);
        return view('kurir/data-diri', $data);
    }
}