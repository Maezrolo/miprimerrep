<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    { 
        $data[ 'titulo']='Pagina Principal';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer(final)');
    }

    public function registro() {

        $data ['titulo']='Registro';
        echo view('front/head(inicio)', $data) ;
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer(final)');
    }

    public function ideas2() {

        $data ['titulo']='Registro';
        echo view('front/head(inicio)', $data) ;
        echo view('front/navbar');
        echo view('back/usuario/ideas2');
        echo view('front/footer(final)'); 
    }

    public function quiene_somos()
    {
        $data[ 'titulo']='Quiene Somos';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/quiene_somos');
        echo view('front/footer(final)');
    }
    public function acerca()
    {
        $data[ 'titulo']='Acerca';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/acerca');
        echo view('front/footer(final)');
    }

    public function logi()
    {
        $data[ 'titulo']='Logi';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/logi');
        echo view('front/footer(final)');
    }
    public function login()
    {
        $data[ 'titulo']='Login';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer(final)');
    }
    public function reg ()
    {
        $data[ 'titulo']='Registro2';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/reg');
        echo view('front/footer(final)');
    }

    public function reg2 ()
    {
        $data[ 'titulo']='Registro2';
        echo view('front/head(inicio)',$data);
        echo view('front/navbar');
        echo view('front/registro(2)');
        echo view('front/footer(final)');
    }

}

