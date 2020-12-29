<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KurirModel;
use App\Models\PengirimanModel;
use App\Models\Model;

class Kurir extends Controller{
    protected $kurirModel;
    protected $pengirimanModel;

    public function __construct(){
        $this->kurirModel = new KurirModel();
        $this->pengirimankurirModel = new PengirimanModel();
    }

    public function index(){
        $data['pengiriman'] = $this->pengirimanModel->getOpenedPengiriman();
        return view('dashboard/index', $data);
    }
}