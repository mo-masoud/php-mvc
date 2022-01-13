<?php
namespace MasoudMVC\Database\Managers;

use PDO;
use PDOStatement;
use MasoudMVC\Database\Model;
use MasoudMVC\Database\Grammers\MySQLGrammar;
use MasoudMVC\Database\Managers\Contracts\DatabaseManager;

class MySQLManager implements DatabaseManager
{
    protected PDO|null $instance = null;

    public function connect(): PDO
    {
        if (!$this->instance) {
            $this->instance = new PDO(config('database.driver') . ':host=' . config('database.host') . ';dbname=' . config('database.db_name'), config('database.username'), config('database.password'));
        }

        return $this->instance;
    }

    private function bindValues(PDOStatement &$stmt, $filters = []): PDOStatement
    {
        for ($i = 1; $i <= count($filters) ; $i++) {
            $stmt->bindValue($i, $filters[$i - 1]['value']);
        }

        return $stmt;
    }

    public function query(string $query, array $values = [])
    {
        $stmt = $this->instance->prepare($query);
        for ($i = 1; $i <= count($values); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $data)
    {
        $query = MySQLGrammar::buildInsertQuery(array_keys($data));

        $stmt = $this->instance->prepare($query);

        for ($i = 1; $i <= count($values = array_values($data)); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);
        }

        $stmt->execute();

        return $this->instance->lastInsertId();
    }

    public function read(string | array $columns = '*', $filters = [], array $orderBy, int | null $limit)
    {
        $query = MySQLGrammar::buildSelectQuery($columns, $filters, $orderBy, $limit);
        $stmt = $this->instance->prepare($query);

        $this->bindValues($stmt, $filters);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, Model::getModel());
    }

    public function update(int $id, $attributes)
    {
        $query = MySQLGrammar::buildUpdateQuery(array_keys($attributes));

        $stmt = $this->instance->prepare($query);

        for ($i = 1; $i <= count($values = array_values($attributes)); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);

            if ($i === count($values)) {
                $stmt->bindValue($i + 1, $id);
            }
        }

        return $stmt->execute();
    }

    public function delete(int $id = null, $filters = [])
    {
        $query = MySQLGrammar::buildDeleteQuery($filters);
        $stmt = $this->instance->prepare($query);
        if ($id) {
            $stmt->bindValue(1, $id);
        } else {
            $this->bindValues($stmt, $filters);
        }

        return $stmt->execute();
    }
}