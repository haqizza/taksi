<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Auth extends Controller{
    protected $userModel;
    
    public function __construct(){
        $this->userModel = new User();
    }

    public function index(){
        return view('login/index');
    }

    public function auth(){
        $session = session();
        $login = $session->get('isLogin');
        $role = $session->get('role');
        
        if($this->request->getmethod() === 'post' && $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]))
        {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $data = $this->userModel->getByLoginData($username, $password);
            
            
            if($data != NULL){
                $userData = [
                    'username'  => $data['username'],
                    'role'      => $data['password'],
                    'logged_in' => TRUE
                ];
                $session->set($userData);

                return redirect()->to('/dashboard');
            }else{
                return redirect()->to('/');
            }
        }
        else
        {
            return redirect()->to(base_url('/login'));
        }
    }
}