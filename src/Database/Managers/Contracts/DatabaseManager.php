<?php
namespace MasoudMVC\Database\Managers\Contracts;

use PDO;

interface DatabaseManager
{
    public function connect(): PDO;

    public function query(string $query, array $values = []);

    public function create(array $data);

    public function read(string $columns = '*', $filter = null);

    public function update(int $id, $data);

    public function delete(int $id);
}
