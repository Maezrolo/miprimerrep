<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before (RequestInterface $request, $arguments = null)
    {
        //si el usuario no esta logueado
        if(!session()->get('logged_in')){
        //entoce redirecina a la paguina de login page
            return redirect()->to('/login');
        }
    }

    public function after( RequestInterface $request,  ResponseInterface  $response, $arguments = null)
    {
        //do something here
    }
}
