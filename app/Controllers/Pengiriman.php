<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PengirimanModel;

class Pengiriman extends Controller{
    protected $pengirimanModel;

    public function __construct(){
        $this->pengirimanModel = new PengirimanModel();
    }

    public function index(){
        // return view('pengiriman/index');
        echo "index";
    }
}