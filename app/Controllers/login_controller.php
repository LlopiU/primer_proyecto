<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController{

    public function index(){
        helper(['form','url']);

        $dato['titulo']='Login';
        echo view('front/header',$dato);
        echo view('front/navbar');
        echo view('Back/usuario/login');
        echo view('front/footer');
    }

    public function auth(){

        $session= session();
        $model = new usuario_Model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');


        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg','usuario dado de baja');
                return redirect()->to('/login');
            }

            $verify_pass= password_verify($password, $pass);

            if($verify_pass){
                $ses_data=[
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                
                session()->setFlashdata('msg','BIENVENIDO!!');
                return redirect()->to('/panel');
            }else{

                $session->setFlashdata('msg','Password Incorrecta');
                return redirect()->to('/login');
            }

        }else{
            $session->setFlashdata('msg','No Existe el Email o es Incorrecto');
            return redirect()->to('/login');
        }
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');

    }
}