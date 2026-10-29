<?php 

namespace App\Model\usuario;

use App\Database\Query;
use App\Model\Usuario\Usuario;

class usuariomodel
{
    private Query $query;

    public function __construct()
    {
       $this->query = new Query();
    }
    
    public function validarUsuario(string $email, string $password): Usuario
    {
        $condicao = "  email = '{$email}'";

        $colunas = "senha";

        $usuario = $this->query->select('usuario', $condicao, $colunas);
        dump($usuario);exit;
        if (!$usuario){
            throw new \Exception('Email invalido!');
        }

        if (!password_verify($password, $usuario[0]['senha'])){
            throw new \Exception('senha invalida');
        }

        dump($usuario);exit();
    }
}

?>