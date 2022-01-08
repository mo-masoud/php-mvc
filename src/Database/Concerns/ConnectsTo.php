<?php
namespace MasoudMVC\Database\Concerns;

use MasoudMVC\Database\Managers\Contracts\DatabaseManager;

trait ConnectsTo
{
    public static function connect(DatabaseManager $manager)
    {
        return $manager->connect();
    }
}
