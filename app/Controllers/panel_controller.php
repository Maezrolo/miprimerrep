<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('id_perfil');
        
            $data['id_perfil']=$perfil;

        $data['titulo']='Panel del usuario';
        echo view('front/head(inicio)', $data) ;
        echo view('front/navbar');
        echo view('back/usuario/usuario_logueado',$data);
        echo view('front/footer(final)');

    }
}