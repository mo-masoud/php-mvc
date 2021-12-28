<?php
namespace MasoudMVC\Validation;

use MasoudMVC\Validation\Rules\MaxRule;
use MasoudMVC\Validation\Rules\BetweenRule;
use MasoudMVC\Validation\Rules\RequiredRule;
use MasoudMVC\Validation\Rules\AlphaNumericalRule;
use MasoudMVC\Validation\Rules\ConfirmedRule;
use MasoudMVC\Validation\Rules\EmailRule;

trait RulesMapper
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'alnum' => AlphaNumericalRule::class,
        'max' => MaxRule::class,
        'between' => BetweenRule::class,
        'email' => EmailRule::class,
        'confirmed' => ConfirmedRule::class
    ];

    public static function resolve(string $rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}
