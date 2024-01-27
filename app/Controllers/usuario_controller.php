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
    public function darDeBaja($id) {
        $formModel = new usuario_Model();
        $formModel->update($id, ['baja' => 'SI']); // Establece el valor 'SI' en la columna 'baja' para dar de baja al usuario
        return redirect()->to(base_url('/usuarios')); // Redirige a la página de lista de usuarios
    }
    
    public function darDeAlta($id) {
        $formModel = new usuario_Model();
        $formModel->update($id, ['baja' => 'NO']); // Establece el valor 'NO' en la columna 'baja' para dar de alta al usuario
        return redirect()->to(base_url('/usuarios')); // Redirige a la página de lista de usuarios
    }
    public function listaUsuario(){
        $fromModel = new usuario_Model();

        $data ['usuarios'] = $fromModel-> findAll();
        $data['titulo']='usuarios';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('back/usuario/usuarios',$data);
        echo view('front/footer');

    }
    
    public function editarUsuario($id) {
        $formModel = new usuario_Model();
        
        // Buscar el producto por su ID
        $usuario = $formModel->find($id);
    
        if ($usuario) {
            $data['titulo'] = 'Editar Usuario';
            echo view('front/header', $data);
            echo view('front/navbar');
            echo view('back/usuario/editar_usuario', ['usuario' => $usuario]);
            echo view('front/footer');
        } else {
            // Manejar el caso en el que el producto no se encuentra
            echo "Usuario no encontrado.";
        }
    }

    public function guardarEdicionU($id) {
        $formModel = new usuario_Model();
        
        $data = [
            'id' => $this->request->getPost('id'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'perfil_id' => $this->request->getPost('perfil_id'),
            
        ];
    
        $formModel->update($id, $data);
    
        session()->setFlashdata('success', 'Usuario actualizado con éxito');
        return redirect()->to(base_url('/usuarios')); // Redirigir a la página de lista de productos
    }

}