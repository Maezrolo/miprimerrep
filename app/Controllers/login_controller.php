<?php

namespace App\Controllers;
use App\Models\usuario_Model; // Asegúrate de que el nombre del modelo sea correcto
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form','url']);
        
        $data['titulo']='login';
        echo view('front/inicio', $data) ;
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer(final)');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        //traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email',$email)->first();
        if($data){
            $pass = $data ['pass'];
                $ba = $data ['baja'];
                if ($ba == 'SI'){
                    $session->setFlashadata('msg','usuario dado de baja');
                    return redirect()->to('/login_controller');
                }
                //se verifican los datos intgresados para inciar, si cumple lo verificacion incia lo sescion
                $verify_pass = password_verify($password, $pass);
                //password_vwrify determina los requisitos de configuracion de la contraseña 
                if ($verify_pass){
                    $ses_data =[
                        'id_usuario'=> $data ['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'usuario' => $data['usuario'],
                        'email' => $data['email'],                        
                        'id_perfil' => $data['id_perfil'],
                        'logged_in' => TRUE
                    ];
                 //si se cumple verificacion incia la sesiom
                $session->set($ses_data);
                session()->setFlashdata('msg','Bienvenido!!');
                return redirect()->to('/panel');
            }else{
                
                $session->setFlashdata('msg','Contraseña incorrecta');
                return redirect()->to('/login');
            }

            }else{
                
                $session->setFlashdata('msg','No Existe el Email o es Incorrecto');
                return redirect()->to('/login');
            }
    }
        public function logout()
        {
            $session=session();
            $session->destroy();
            return redirect()->to('/');
        }

}


