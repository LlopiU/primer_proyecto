<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller{
    public function __construct(){
        helper(['form','url']);
    }

    public function create(){
        $dato['titulo']='Registro';
        echo view('front/header',$dato);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function formValidation(){
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ],
    );
    $formModel = new usuario_Model();

    if (!$input){
        $data['titulo']='Registro';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('back/usuario/registro',['validation' => $this->validator]);
        echo view('front/footer');
    }else{
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('success','Usuario Registrado con Exito');
        return redirect()->to(base_url('/registro'));
    }
    }
}