<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;

class CategoriaController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('Categoria\Categorias.php');
    }
}