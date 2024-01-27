<?php
namespace App\Controllers;
Use App\Models\producto_Model;
use CodeIgniter\Controller; 

class  Producto_controller extends Controller{


    public function __construct(){
        helper(['form','url']);
    }

    public function create(){
        $dato['titulo']='Registrop';
        echo view('front/header',$dato);
        echo view('front/navbar');
        echo view('back/producto/registrop');
        echo view('front/footer');
    }

    public function formValidation(){
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'marca' => 'required|min_length[3]|max_length[25]',
            'cantidad' => 'required|min_length[1]',
            'descripcion' => 'required|min_length[4]|max_length[100]',
            'precio' => 'required|min_length[3]|max_length[10]'
        ],
    );

    $formModel = new producto_Model();

    if (!$input){
        $data['titulo']='Registrop';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('back/producto/registrop',['validation' => $this->validator]);
        echo view('front/footer');
    }else{
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'marca' => $this->request->getVar('marca'),
            'cantidad' => $this->request->getVar('cantidad'),
            'descripcion' => $this->request->getVar('descripcion'),
            'precio' => $this->request->getVar('precio'),
        ]);

        session()->setFlashdata('success','Producto Registrado con Exito');
        return redirect()->to(base_url('/registrop'));
    }
    }

    public function darDeBaja($id) {
        $formModel = new producto_Model();
        $formModel->update($id, ['baja' => 'SI']); // Establece el valor 'SI' en la columna 'baja' para dar de baja al usuario
        return redirect()->to(base_url('/productos')); // Redirige a la página de lista de usuarios
    }
    
    public function darDeAlta($id) {
        $formModel = new producto_Model();
        $formModel->update($id, ['baja' => 'NO']); // Establece el valor 'NO' en la columna 'baja' para dar de alta al usuario
        return redirect()->to(base_url('/productos')); // Redirige a la página de lista de usuarios
    }
    public function listaProducto(){
        $fromModel = new producto_Model();

        $data ['productos'] = $fromModel-> findAll();
        $data['titulo']='productos';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('back/producto/productos',$data);
        echo view('front/footer');

    }
        
    public function editarProducto($id) {
        $formModel = new producto_Model();
        
        // Buscar el producto por su ID
        $producto = $formModel->find($id);
    
        if ($producto) {
            $data['titulo'] = 'Editar Producto';
            echo view('front/header', $data);
            echo view('front/navbar');
            echo view('back/producto/editar_producto', ['producto' => $producto]);
            echo view('front/footer');
        } else {
            // Manejar el caso en el que el producto no se encuentra
            echo "Producto no encontrado.";
        }
    }

    public function guardarEdicion($id) {
        $formModel = new producto_Model();
        
        $data = [
            'id' => $this->request->getPost('id'),
            'nombre' => $this->request->getPost('nombre'),
            'marca' => $this->request->getPost('marca'),
            'cantidad' => $this->request->getPost('cantidad'),
            'descripcion' => $this->request->getPost('descripcion'),
            'id_categoria' => $this->request->getPost('id_categoria'),
            'precio' => $this->request->getPost('precio'),
        ];
    
        $formModel->update($id, $data);
    
        session()->setFlashdata('success', 'Producto actualizado con éxito');
        return redirect()->to(base_url('/productos')); // Redirigir a la página de lista de productos
    }
    
    


}
