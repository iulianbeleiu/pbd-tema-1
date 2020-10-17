<?php

class DatabaseConnection
{
    private static $instance = null;

    private $connection = null;

    private $host = '127.0.0.1';

    private $user = 'root';

    private $password = 'root';

    private $databaseName = 'evidenta_calculatoare_licente';

    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};
                dbname={$this->databaseName}",
                $this->user,
                $this->password
            );
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    public function getConnection(): Pdo
    {
        return $this->connection;
    }
}