<?php
namespace MasoudMVC\Database\Grammers;

use MasoudMVC\Database\Model;

class MySQLGrammar
{
    private static function buildFilters($filters)
    {
        $query = '';
        $hasWhere = false;
        foreach ($filters as $filter) {
            if ($filter['type'] === 'where') {
                $conditionKey = !$hasWhere ? 'WHERE' : 'AND';
                $hasWhere = true;
            } else {
                $conditionKey = $hasWhere ? 'OR' : 'WHERE';
            }
            $query .= " {$conditionKey} {$filter['column']} {$filter['operator']} ?";
        }

        return $query;
    }

    public static function buildInsertQuery(array $keys)
    {
        $values = '';

        for ($i = 1; $i <= count($keys); $i++) {
            $values .= '?';
            if ($i < count($keys)) {
                $values .= ', ';
            }
        }

        return 'INSERT INTO ' . Model::getTableName() . ' (`' . implode('`, `', $keys) . '`) VALUES (' . $values . ')';
    }

    public static function buildUpdateQuery($keys)
    {
        $query = 'UPDATE ' . Model::getTableName() . ' SET ';

        foreach ($keys as $key) {
            $query .= "{$key} = ?, ";
        }

        $query = rtrim($query, ', ') . ' WHERE ID = ?';

        return $query;
    }

    public static function buildSelectQuery($columns = '*', $filters = [], array $orderBy, int | null $limit)
    {
        if (is_array($columns)) {
            $columns = implode(', ', $columns);
        }

        $query = "SELECT {$columns} FROM " . Model::getTableName();

        $query .= self::buildFilters($filters);

        $query .= " ORDER BY {$orderBy[0]} {$orderBy[1]}";

        if ($limit) {
            $query .= " LIMIT {$limit}";
        }

        return $query;
    }

    public static function buildDeleteQuery($filters = [])
    {
        $query = 'DELETE FROM ' . Model::getTableName();

        if (count($filters) > 0) {
            $query .= self::buildFilters($filters);
        } else {
            $query .= ' WHERE id = ?';
        }

        return $query;
    }
}