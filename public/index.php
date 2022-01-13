<?php

session_start();

use App\Models\User;
use Dotenv\Dotenv;

require_once __DIR__ . '/../src/Support/helper.php';

require_once base_path('vendor/autoload.php');

require_once base_path('routes/web.php');

$env = Dotenv::createImmutable(base_path());

$env->load();

app()->run();

// var_dump(User::get(limit: 2, orderBy: ['id', 'desc']));
var_dump(User::find(10));