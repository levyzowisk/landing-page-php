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

}
