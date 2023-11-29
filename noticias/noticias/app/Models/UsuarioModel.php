<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedfilds = ['id', 'nome', 'email', 'senha', 'hab'];

    public function obterPorEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
