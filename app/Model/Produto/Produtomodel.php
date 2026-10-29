<?php 

namespace App\Model\Produto;

use App\Database\Query;

class Produtomodel
{
    private Query $query

    public function __construct()
    
    {
        $this->query = new Query();
    }

    public fuction buscarTodosProdutos(): array
    {
        $resultado = this->query->select('produto');

        
    }
    return $resultado;


}
