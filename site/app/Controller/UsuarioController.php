<?php
declare(strict_types=1);

namespace App\Controller;


use App\Model\Usuario;

class UsuarioController extends AbstractController
{
    public function add(): void
    {    
        if($_POST) {
            Usuario::save([
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha']
            ]);

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
        $usuario = Usuario::findById($id);
        if($_POST) {
            Usuario::update([
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha']
            ], $id);
            echo '<script type="text/javascript">';
            echo 'window.location.href="../listar"';
            echo '</script>';
            die();
        }
        

        $usuario = Usuario::findById($id);
        $this->view('usuarios/edit', ["usuario" => $usuario]);
    }

    public function delete(): void
    {   
        $id = intval($_GET['id']);
        Usuario::delete($id);
        echo '<script type="text/javascript">';
        echo 'window.location.href="../listar"';
        echo '</script>';
    }
}
