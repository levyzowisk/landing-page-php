<?php 
declare(strict_types=1);

namespace App\Model;

class Usuario extends AbstractModel
{

    public static function all(): array 
    {
        $sql = 'SELECT * FROM usuario';
        return parent::db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function findById(int $id): ?array
    {
        $sql = 'SELECT * FROM usuario WHERE id = :id';
        $query = parent::db()->prepare($sql);

        $query->execute([
            ':id' => $id
        ]);

        $result = $query->fetch(\PDO::FETCH_ASSOC);

        return $result ?: null;

    }

    public static function save (array $usuario):void
    {
        $sql = 'INSERT INTO usuario(nome, email, senha) VALUES (:nome, :email, :senha)';

        $query = parent::db()->prepare($sql);

        $query->execute([
            ':nome' => $usuario['nome'],
            ':email' => $usuario['email'],
            ':senha' => $usuario['senha']
        ]);
    }

    public static function delete(int $id): void
    {
        $sql = 'DELETE FROM usuario WHERE id = :id';

        parent::db()->prepare($sql)->execute([
            ':id' => $id
        ]);
    }

    public static function update(array $usuario, int $id): void 
    {
        $sql = 'UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id';

        parent::db()->prepare($sql)->execute([
            ':nome' => $usuario['nome'],
            ':email' => $usuario['email'],
            ':senha' => $usuario['senha'],
            ':id' => $id
        ]); 
    }
}
?>