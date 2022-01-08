<?php
namespace App\Models;

use MasoudMVC\Support\Str;

// Todo:: we need to add find one.
abstract class Model
{
    protected static $instance;

    public static function create(array $attributes)
    {
        self::$instance = static::class;

        return app()->db->create($attributes);
    }

    public static function all()
    {
        self::$instance = static::class;

        return app()->db->read();
    }

    public static function delete(int $id)
    {
        self::$instance = static::class;

        return app()->db->delete($id);
    }

    public static function update(int $id, array $attributes)
    {
        self::$instance = static::class;

        return app()->db->update($id, $attributes);
    }

    // Todo:: we need to handle (and|or|limit|order)
    public static function get($filter, $columns = '*')
    {
        self::$instance = static::class;

        return app()->db->read($columns, $filter);
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