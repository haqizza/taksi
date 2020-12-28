<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Kurir extends Controller{

    public function index(){
        return view('dashboard/index');
    }
}