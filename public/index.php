<?php

use Dotenv\Dotenv;
use MasoudMVC\Validation\Validator;

require_once __DIR__ . '/../src/Support/helper.php';

require_once base_path('vendor/autoload.php');

require_once base_path('routes/web.php');

$env = Dotenv::createImmutable(base_path());

$env->load();

app()->run();

$validator = new Validator();
$validator->setRules([
    'password' => 'required|confirmed',
]);

$validator->make([
    'password' => '',
    'password_confirmation' => 'abc1',
]);

var_dump($validator->errors());
