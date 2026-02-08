<?php 
class Usuario
{

    public static function all(): array 
    {
        return [
            [
                'id' => 1,
                'nome' => 'Levy Pereira Sousa',
                'email' => 'pereira@gmail.com',
                'data_nascimento' => '19-02-2005'
            ],
            [
                'id' => 2,
                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@gmail.com',
                'data_nascimento' => '25-06-1990'
            ],
            [
                'id' => 3,
                'nome' => 'João Silva',
                'email' => 'joao.silva@gmail.com',
                'data_nascimento' => '10-12-1985'
            ]
        ];
    }
}
?>