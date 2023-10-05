<?php

namespace App\Controllers;
use App\Models\usuario_Model; // Asegúrate de que el nombre del modelo sea correcto
use CodeIgniter\Controller;

class usuario_controller extends Controller
{

    public function __construct(){
        helper(['form', 'url']);
    }
    
    public function create() {
        $data['titulo'] = 'Registro'; // Cambio de $dato a $data
        echo view('front/head(inicio)', $data); // Cambio de $dato a $data
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer(final)');
    }
    
    public function formValidation() {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[99]|valid_email|is_unique[usuario.email]', // Asegúrate de que la tabla sea correcta
            'pass' => 'required|min_length[3]|max_length[80]',
        ]);

        $formModel = new usuario_Model();

        if (!$input) {
            $data['titulo'] = 'Registro'; // Cambio de $dato a $data
            echo view('front/head(inicio)', $data); // Cambio de $dato a $data
            echo view('front/navbar');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer(final)');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            $this->response->redirect('registro'); // Cambio de $this->response->redirect('/login');
        }
    }
}
