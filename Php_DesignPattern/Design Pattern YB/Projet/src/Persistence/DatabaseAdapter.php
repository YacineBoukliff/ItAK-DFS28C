<?php
class DatabaseAdapter implements PersistenceInterface
{
    private Database $database;
    private \PDO $connection;

    public function __construct(Database $database, \PDO $connection)
    {
        $this->database = $database;
        $this->connection = $connection;
    }

    public function save(Product $product): void
    {
        $sql = "INSERT INTO products (id, designation, univers, price) VALUES (?, ?, ?, ?)";
        $this->database->sqlQuery($sql, $this->connection);
    }
}