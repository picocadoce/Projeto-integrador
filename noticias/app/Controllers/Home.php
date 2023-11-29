<?php

namespace App\Controllers;

use App\Models\NoticiaModel;

class Home extends BaseController
{
    protected $class = ['before' => ['auth']];
    private $noticiaModel;

    public function __construct()
    {
        $this->noticiaModel = new NoticiaModel();
    }
    public function index(): string
    {
        return view('home', [
            #'usuarios' => $this->noticiaModel->findAll(),
            'noticias' => $this->noticiaModel->orderBy('DATA_HORA', 'DESC')->paginate(20),
            'pager' => $this->noticiaModel->pager
        ]);
    }
}
