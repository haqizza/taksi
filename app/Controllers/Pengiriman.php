<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\I18n\Time;
use App\Models\PengirimanModel;

class Pengiriman extends Controller{
    protected $pengirimanModel;
    protected $session;

    public function __construct(){
        $this->session = session();
        $this->pengirimanModel = new PengirimanModel();
    }

    public function index(){
        return view('pengiriman/index');
    }

    public function save(){
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
            'cara_pembayaran'=> 'required',
        ])){
            $file = $this->request->getFile('foto');
            if (! $file->isValid()){
                throw new RuntimeException($file->getErrorString().'('.$file->getError().')');
            }
            
            $name = $file->getName();

            $file = $file->move(WRITEPATH.'uploads');
            
            // $name = $file->getRealPath().$file->getName();
            // $time = new DateTime('now');
            $time = Time::parse('now');
            
            $time = $time->toLocalizedString('LLLLLdLLyys');
            $kode = 'K'.$time;


            $this->pengirimanModel->save([
                'kode_pengiriman' =>  $kode,
                'nama_pengirim' =>  $this->request->getVar('nama_pengirim'),
                'alamat_pengirim' =>  $this->request->getVar('alamat_pengirim'),
                'telp_pengirim' =>  $this->request->getVar('telp_pengirim'),
                'nama_penerima' =>  $this->request->getVar('nama_penerima'),
                'alamat_penerima' =>  $this->request->getVar('alamat_penerima'),
                'telp_penerima' =>  $this->request->getVar('telp_penerima'),
                'nama_barang' =>  $this->request->getVar('nama_barang'),
                'ukuran_barang' =>  $this->request->getVar('ukuran_barang'),
                'foto' =>  $name,
                'keterangan' =>  $this->request->getVar('keterangan'),
                'pengiriman' =>  $this->request->getVar('pengiriman'),
                'cara_pembayaran' =>  $this->request->getVar('cara_pembayaran'),
                'status_pengiriman' =>  'menunggu penjemputan',
            ]);
            $data['kode'] = $kode;

            return view('pengiriman/resi', $data);
        }
        else
        {
            return view('pengiriman/index');
        }
    }

    public function cek(){
        return view('resi/cek');
    }
    public function resi($kode){
        $data['data'] = $this->pengirimanModel->getByKode($kode);

        return view('resi/index', $data);
    }

}