<?php

declare(strict_types=1);

class Usuario
{

    public string $nome;
    public string $email;
    public string $foto;

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'foto' => 'https://example.com/images/joao.jpg',
                'nome' => 'João Silva',
                'email' => 'joao.silva@example.com',
            ],
            [
                'id' => 2,
                'foto' => 'https://example.com/images/maria.jpg',
                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@example.com',
            ],
        ];
    }
}
