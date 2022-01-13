<?php
namespace MasoudMVC\Database;

use MasoudMVC\Database\Concerns\ConnectsTo;
use MasoudMVC\Database\Managers\Contracts\DatabaseManager;

class DB
{
    public function __construct(protected DatabaseManager $manager)
    {
    }

    public function init()
    {
        ConnectsTo::connect($this->manager);
    }

    protected function raw(string $query, $value = [])
    {
        return $this->manager->query($query, $value);
    }

    protected function create(array $data)
    {
        return $this->manager->create($data);
    }

    protected function delete(int $id = null, $filters = [])
    {
        return $this->manager->delete($id, $filters);
    }

    protected function update($id, array $attributes)
    {
        return $this->manager->update($id, $attributes);
    }

    protected function read(string | array $columns = '*', $filters = [], array $orderBy, int | null $limit)
    {
        return $this->manager->read($columns, $filters, $orderBy, $limit);
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        }
    }
}