<?php
declare(strict_types=1);

namespace App\Model;


class Palestrante extends AbstractModel
{

    public string $nome;
    public string $email;
    public string $foto;

    public static function all(): array
    {
        $sql = 'SELECT * FROM palestrantes';
        
        return parent::db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function findById(int $id): ?array
    {
            $sql = 'SELECT * FROM palestrantes WHERE id = :id';
            $query = parent::db()->prepare($sql);

            $query->execute([
                ':id' => $id
            ]);

            $result = $query->fetch(\PDO::FETCH_ASSOC);

            return $result ?: null;
    }

    public static function update(array $palestrante, int $id): void 
    {
        $sql = 'UPDATE palestrantes SET nome = :nome, email = :email, foto = :foto WHERE id = :id';
        parent::db()->prepare($sql)->execute([
            ':nome' => $palestrante['nome'],
            ':email' => $palestrante['email'],
            ':foto' => $palestrante['foto'],
            ':id' => $id
        ]);
    }

    public static function save(array $usuario): void 
    {
        $sql = 'INSERT INTO palestrantes (nome, email, foto) VALUES (:nome, :email, :foto)';

        parent::db()->prepare($sql)->execute([
            ':nome' => $usuario['nome'],
            ':email' => $usuario['email'],
            ':foto' => $usuario['foto']
        ]);
    }

    public static function delete(int $id): void
    {
        $sql = 'DELETE FROM palestrantes WHERE id = :id';
        parent::db()->prepare($sql)->execute([
            ":id" => $id
        ]);
}
}
