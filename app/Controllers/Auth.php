<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller{
    protected $userModel;
    protected $session;
    
    public function __construct(){
        $this->session = session();
        $this->userModel = new UserModel();
    }

    public function index(){
        return view('login/index');
    }

    public function auth(){
        
        $login = $this->session->get('isLogin');
        $role = $this->session->get('role');
        
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
                    'id'        => $data['kurir'],
                    'username'  => $data['username'],
                    'role'      => $data['role'],
                    'logged_in' => TRUE
                ];
                $this->session->set($userData);
                // echo $this->session->get('id');
                if($this->session->role == 'admin'){
                    return redirect()->to('/admin');
                }
                else if($this->session->role == 'kurir'){
                    return redirect()->to('/kurir');
                }
            }else{
                return redirect()->to('/');
            }
        }
        else
        {
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout(){
        $this->session->destroy();

        return redirect()->to('/');
    }
}