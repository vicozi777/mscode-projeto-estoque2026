<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Controller\AppController;
use App\Model\Produto\Produtomodel;
use Override;

class ProdutoController extends AbstractController
{
    private Produtomodel $model;

    public function index(array $requestData): void
    {
        $model = new Produtomodel();

    }

    public fuction index(array $requestData): void
    {
        $produto = $this->model->buscarTodos();

        $this->render('produto/produtos.php');
    }
}