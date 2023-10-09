<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pagina Principal';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/Carrusel');
        echo view('front/footer');
    }

    public function quienes_somos()
    {
        
        $data['titulo']='Quienes Somos';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/Quienes');
        echo view('front/footer');
    }
    public function acerca_de()
    {
        
        $data['titulo']='Acerca De';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/AcercaDe');
        echo view('front/footer');
    }
    public function catalogo()
    {
        
        $data['titulo']='catalogo';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('front/catalogo');
        echo view('front/footer');
    }
    public function login()
    {
        
        $data['titulo']='Login';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function registro()
    {
        $data['titulo']='Registro';
        echo view('front/header',$data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }
}
