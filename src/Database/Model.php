<?php
namespace MasoudMVC\Database;

use MasoudMVC\Support\Str;

/**
 * Base Model class.
 *
 */
abstract class Model
{
    protected static $instance;

    private array $filters = [];

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $attribute) {
            $this->{$key} = $attribute;
        }
    }

    private function where(string $column, string $operator, string $value)
    {
        $this->filters[] = [
            'type' => 'where',
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
        ];
        return $this;
    }

    private function orWhere(string $column, string $operator, string $value)
    {
        $this->filters[] = [
            'type' => 'or',
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
        ];
        return $this;
    }

    private function get($columns = '*', $orderBy = ['id', 'ASC'], $limit = null)
    {
        self::$instance = static::class;

        return app()->db->read($columns, $this->filters, $orderBy, $limit);
    }

    private function find(int | null $id = null, $columns = '*')
    {
        if (!$id) {
            return current($this->get($columns, limit: 1));
        }
        return current($this->where('id', '=', $id)->get($columns, limit: 1));
    }

    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $parameters);
        }
    }

    public static function __callStatic($method, $parameters)
    {
        return (new static)->$method(...$parameters);
    }

    public static function create(array $attributes)
    {
        self::$instance = static::class;

        $id = app()->db->create($attributes);
        $attributes['id'] = $id;
        return new self::$instance($attributes);
    }

    public static function all()
    {
        self::$instance = static::class;

        return app()->db->read();
    }

    private function delete(int $id = null)
    {
        self::$instance = static::class;

        return app()->db->delete($id, $this->filters);
    }

    public static function update(int $id, array $attributes)
    {
        self::$instance = static::class;

        return app()->db->update($id, $attributes);
    }

    public static function getModel()
    {
        return self::$instance;
    }

    public static function getTableName()
    {
        return Str::lower(Str::plural(class_basename(self::$instance)));
    }
}