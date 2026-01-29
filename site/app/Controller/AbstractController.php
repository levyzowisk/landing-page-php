<?php


abstract class AbstractController
{
    public function view(string $name, array $params = []): void
    {
        extract($params);
        include "../app/views/{$name}.phtml";
    }
}

// class UsuarioController extends AbstractController

