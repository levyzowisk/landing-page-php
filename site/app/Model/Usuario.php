<?php 
declare(strict_types=1);

namespace App\Model;

class Usuario
{

    public static function all(): array 
    {
        return [
            [
                'id' => 1,
                'nome' => 'Levy Pereira Sousa',
                'email' => 'pereira@gmail.com',
                'data_nascimento' => '2005-02-19'
            ],
            [
                'id' => 2,
                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@gmail.com',
                'data_nascimento' => '1990-06-25'
            ],
            [
                'id' => 3,
                'nome' => 'João Silva',
                'email' => 'joao.silva@gmail.com',
                'data_nascimento' => '1985-12-10'
            ]
        ];
    }

    public static function findById(int $id): ?array
    {
        $usuario = self::all();
        foreach($usuario as $usuario)
        {
            if($usuario['id'] === $id)
            {
                return $usuario;
            }
        }
        return null;

    }
}
?>