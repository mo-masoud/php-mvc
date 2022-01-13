<?php
namespace MasoudMVC\Database\Managers\Contracts;

use PDO;

interface DatabaseManager
{
    public function connect(): PDO;

    public function query(string $query, array $values = []);

    public function create(array $data);

    public function read(string | array $columns = '*', $filter = [], array $orderBy, int | null $limit);

    public function update(int $id, $data);

    public function delete(int $id = null, $filters = []);
}