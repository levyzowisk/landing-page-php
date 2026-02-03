<?php

declare(strict_types=1);

class PalestranteController extends AbstractController
{
    public function add(): void
    {
        if($_POST) {
           echo '<script type="text/javascript">';
           echo 'window.location.href="listar";';
           echo '</script>';
           die(); 
        }

        $this->view('palestrantes/add');
    }

    public function list(): void
    {
        $usuarios = ['usuarios' => Usuario::all()];
        $this->view('palestrantes/list', $usuarios);
    }

    public function edit(): void {
        $id = intval($_GET['id']);
        if($_POST) {
        // Usuario::update([
        //     'nome' => $_POST['nome'],
        //     'email' => $_POST['email'],
        //     'foto' => $_POST['foto'],
        // ], $id);
          echo '<script type="text/javascript">';
          echo 'window.location.href="../listar";';
          echo '</script>';
        die();
        }
        $usuario = Usuario::findById($id);
        $this->view('palestrantes/edit', ["usuario" => $usuario]);
    }

}
