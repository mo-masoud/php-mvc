<?php
namespace MasoudMVC\Database\Managers;

use App\Models\Model;
use MasoudMVC\Database\Grammers\MySQLGrammar;
use MasoudMVC\Database\Managers\Contracts\DatabaseManager;
use PDO;

class MySQLManager implements DatabaseManager
{
    protected static $instance;

    public function connect(): PDO
    {
        if (!self::$instance) {
            self::$instance = new PDO(config('database.driver') . ':host=' . config('database.host') . ';dbname=' . config('database.db_name'), config('database.username'), config('database.password'));
        }

        return self::$instance;
    }

    public function query(string $query, array $values = [])
    {
        $stmt = self::$instance->prepare($query);
        for ($i = 1; $i <= count($values); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $data)
    {
        $query = MySQLGrammar::buildInsertQuery(array_keys($data));

        $stmt = self::$instance->prepare($query);

        for ($i = 1; $i <= count($values = array_values($data)); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);
        }

        return $stmt->execute();
    }

    public function read(string $columns = '*', $filter = null)
    {
        $query = MySQLGrammar::buildSelectQuery($columns, $filter);
        $stmt = self::$instance->prepare($query);
        if ($filter) {
            $stmt->bindValue(1, $filter[2]);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, Model::getModel());
    }

    public function update(int $id, $attributes)
    {
        $query = MySQLGrammar::buildUpdateQuery(array_keys($attributes));

        $stmt = self::$instance->prepare($query);

        for ($i = 1; $i <= count($values = array_values($attributes)); $i++) {
            $stmt->bindValue($i, $values[$i - 1]);

            if ($i === count($values)) {
                $stmt->bindValue($i + 1, $id);
            }
        }

        return $stmt->execute();
    }

    public function delete(int $id)
    {
        $query = MySQLGrammar::buildDeleteQuery();
        $stmt = self::$instance->prepare($query);
        $stmt->bindValue(1, $id);

        return $stmt->execute();
    }
}
