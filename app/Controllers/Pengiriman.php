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
        return view('pengiriman/index');
    }

    public function save(){
        if($this->request->getmethod() === 'post' && $this->validate([
            'nim' => 'required',
            'name' => 'required'
        ])){
            $this->pengirimanModel->save([
                'nim' => $this->request->getVar('nim'),
                'name' => $this->request->getVar('name'),
                'gender' => $this->request->getVar('gender'),
                'birth' => $this->request->getVar('birth'),
                'address' => $this->request->getVar('address'),
                'phone' => $this->request->getVar('phone'),
                'email' => $this->request->getVar('email')
            ]);

            return redirect()->to('/mahasiswa');
        }
        else
        {
            return view('mahasiswa/create');
        }
    }
}