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

    public static function findById(int $id): ?array
    {
        $usuarios = self::all();
        foreach($usuarios as $usuario) {
            if($usuario['id'] === $id) {
                return $usuario;
            }
        };
            return null;
    }

    public static function update(array $usuario, int $id): void 
    {
        var_dump($usuario);
        var_dump($id);
    }
}
