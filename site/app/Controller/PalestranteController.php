<?php
declare(strict_types=1);

namespace App\Controller;


use App\Model\Palestrante;

class PalestranteController extends AbstractController
{
    public function add(): void
    {
        if($_POST) {
            Palestrante::save([
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'foto' => $_POST['foto']
            ]);
           echo '<script type="text/javascript">';
           echo 'window.location.href="listar";';
           echo '</script>';
           die(); 
        }

        $this->view('palestrantes/add');
    }

    public function list(): void
    {
        $palestrantes = ['palestrantes' => Palestrante::all()];
        $this->view('palestrantes/list', $palestrantes);
    }

    public function edit(): void {
        $id = intval($_GET['id']);
        $palestrantes = Palestrante::findById($id);
        if($_POST) {
            Palestrante::update([
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'foto' => $_POST['foto']
            ], $id);
          echo '<script type="text/javascript">';
          echo 'window.location.href="../listar";';
          echo '</script>';
        die();
        }
        $this->view('palestrantes/edit', ["palestrante" => $palestrantes]);
    }

    public function delete(): void {
        $id = intval($_GET['id']);

        Palestrante::delete($id);
        echo '<script type="text/javascript">';
        echo 'window.location.href="../listar"';
        echo '</script>';
        die();

    }

}
