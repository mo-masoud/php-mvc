<?php

namespace MasoudMVC\Validation\Rules;

use MasoudMVC\Validation\Rules\Contract\Rule;

class BetweenRule implements Rule
{
    public function __construct(protected int $min, protected int $max)
    {
    }

    public function apply($field, $value, $data)
    {
        if (strlen($value) > $this->max) {
            return false;
        }

        if (strlen($value) < $this->min) {
            return false;
        }

        return true;
    }

    public function __toString()
    {
        return "%s must be between {$this->min} and {$this->max}";
    }
}
