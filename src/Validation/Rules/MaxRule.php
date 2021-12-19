<?php

namespace MasoudMVC\Validation\Rules;

use MasoudMVC\Validation\Rules\Contract\Rule;

class MaxRule implements Rule
{
    public function __construct(protected int $max)
    {
    }

    public function apply($field, $value, $data)
    {
        return (strlen($value) < $this->max);
    }

    public function __toString()
    {
        return "%s must be less then {$this->max}";
    }
}
