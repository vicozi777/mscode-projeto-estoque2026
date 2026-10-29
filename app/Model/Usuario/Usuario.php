<?php

namespace App\Model\Usuario;

class Usuario 
{
    private int $id;
    private string $nome;
    private string $email;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this->nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

?>