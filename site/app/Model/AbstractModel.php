<?php 
declare(strict_types=1);

namespace App\Model;

use App\Connection\DatabaseConnection;

class AbstractModel 
{
    public static function db(): \PDO
    {
        return DatabaseConnection::open();
    }
}
