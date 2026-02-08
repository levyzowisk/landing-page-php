<?php

use App\Controller\PalestranteController;
use App\Controller\UsuarioController;

$routes = [];
$routes['usuarios'] = [
    'cadastrar' => [UsuarioController::class, 'add'],
    'editar' => [UsuarioController::class, 'edit'],
    'excluir' => [UsuarioController::class, 'add'],
    'listar' => [UsuarioController::class, 'list'],
];
$routes['palestrantes'] = [
    'cadastrar' => [PalestranteController::class, 'add'],
    'editar' => [PalestranteController::class, 'edit'],
    'excluir' => [PalestranteController::class, 'delete'],
    'listar' => [PalestranteController::class, 'list'],
];

$url = $_SERVER['REQUEST_URI'];

$partes = explode('/', $url);

$entidade = $partes[2] ?? '';
$acao = $partes[3] ?? '';

if (false === isset($routes[$entidade][$acao])) {
    echo "Pagina não encontrada";
    exit;
}

$controller = $routes[$entidade][$acao][0];
$method = $routes[$entidade][$acao][1];

(new $controller)->$method();
