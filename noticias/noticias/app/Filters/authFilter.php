<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //Verificar se está logado
        if (!session()->get('logado')) {
            return redirect()->to('login');
        }
        return $request;
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
