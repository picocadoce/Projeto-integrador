<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiaModel extends Model
{
    protected $table            = 'noticias';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedfilds = ['id', 'titulo', 'descricao', 'data_hora', 'tag', 'hab', 'foto'];
}
