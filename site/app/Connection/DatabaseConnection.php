<?php 
declare(strict_types=1);

namespace App\Connection;

use Dotenv\Dotenv;

class DatabaseConnection 
{
    private static bool $envLoaded = false;

    private static function loadEnv(): void
    {
        if (self::$envLoaded) {
            return;
        }

        $rootPath = dirname(__DIR__, 3);
        
        if (file_exists($rootPath . '/.env')) {
            $dotenv = Dotenv::createImmutable($rootPath);
            $dotenv->load();
        }

        self::$envLoaded = true;
    }

    public static function open(): \PDO
    {
        self::loadEnv();

        $host = $_ENV['DB_HOST'] ?? getenv('DB_HOST') ?: 'setup-lp_mysql';
        $dbname = $_ENV['DB_NAME'] ?? getenv('DB_NAME') ?: 'setup_lp';
        $user = $_ENV['DB_USER'] ?? getenv('DB_USER') ?: 'setup';
        $password = $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD') ?: 'setup';

        $dsn = sprintf('mysql:host=%s;dbname=%s', $host, $dbname);
        
        return new \PDO($dsn, $user, $password);
    }
}

