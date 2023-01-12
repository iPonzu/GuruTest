<?php
namespace App\Controllers;

use CodeIgniter\Controller;
class gurutest extends Controller{
    public function index(){
        echo view('usuarios/home');
        
    }

    public function sobre(){
        return view('usuarios/sobre');
    }
}