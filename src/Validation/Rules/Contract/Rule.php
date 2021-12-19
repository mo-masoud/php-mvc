<?php

namespace MasoudMVC\Validation\Rules\Contract;

interface Rule
{
    public function apply($field, $value, $data);

    public function __toString();
}
