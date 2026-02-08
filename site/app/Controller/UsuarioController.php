<?php
declare(strict_types=1);

namespace App\Controller;


use App\Model\Usuario;

class UsuarioController extends AbstractController
{
    public function add(): void
    {    
        if($_POST) {
            echo '<script type="text/javascript">';
            echo 'window.location.href="listar";';
            echo '</script>';
            die();
        }
        
        $this->view('usuarios/add');
    }

    public function list(): void
    {
        $usuarios = ['usuarios' => Usuario::all()];
        $this->view('usuarios/list', $usuarios);
    }

    public function edit(): void 
    {
        $id =  intval($_GET['id']);
        if($_POST) {
            echo '<script type="text/javascript">';
            echo 'window.location.href="../listar"';
            echo '</script>';
            die();
        }


        $usuario = Usuario::findById($id);
        $this->view('usuarios/edit', ["usuario" => $usuario]);
    }
}
