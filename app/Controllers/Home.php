<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;
use DateTime;
use App\Models\PengirimanModel;
use App\Models\Model;
class Home extends BaseController
{
    protected $pengirimanModel;


    public function __construct(){
        $this->pengirimanModel = new PengirimanModel();
    }
	public function index()
	{
		return view('home/index');
	}

    public function check(){
        $time = new DateTime('now');
        $time = Time::parse('now');
        
        $time->toLocalizedString('LLLLLdLLyys');
    }
    
    public function image($imageName){
        if(($image = file_get_contents(WRITEPATH.'uploads/'.$imageName)) === FALSE)
            show_404();

        // choose the right mime type
        $ext = explode(".", $imageName);
        $mimeType = 'image/'.end($ext);

        $this->response
            ->setStatusCode(200)
            // ->setContentType($mimeType)
            ->setBody($image)
            ->send();

    }

}
