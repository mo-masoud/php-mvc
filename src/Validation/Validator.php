<?php

namespace MasoudMVC\Validation;

use MasoudMVC\Validation\Rules\AlphaNumericalRule;
use MasoudMVC\Validation\Rules\BetweenRule;
use MasoudMVC\Validation\Rules\Contract\Rule;
use MasoudMVC\Validation\Rules\MaxRule;
use MasoudMVC\Validation\Rules\RequiredRule;

class Validator
{
    protected array $data = [];
    protected array $rules = [];
    protected array $aliases = [];
    protected ErrorBag $errorBag;
    protected array $ruleMap = [
        'required' => RequiredRule::class,
        'alnum' => AlphaNumericalRule::class,
        'max' => MaxRule::class,
        'between' => BetweenRule::class
    ];

    public function make($data)
    {
        $this->data = $data;
        $this->errorBag = new ErrorBag;
        $this->validate();
    }

    protected function validate()
    {
        foreach ($this->rules as $field => $rules) {
            foreach ($this->resolveRules($rules) as $rule) {
                $this->applyRule($field, $rule);
            }
        }
    }

    protected function applyRule($field, Rule $rule)
    {
        if (!$rule->apply($field, $this->getFieldValue($field), $this->data)) {
            $this->errorBag->add($field, Message::generate($rule, $this->alias($field)));
        }
    }

    protected function resolveRules($rules)
    {
        return array_map(function ($rule) {
            if (is_string($rule)) {
                return $this->getRuleFromString($rule);
            }

            return $rule;
        }, $rules);
    }

    protected function getRuleFromString(string $rule)
    {
        $exploded = explode(':', $rule);
        $rule = $exploded[0];
        $options = explode(',', end($exploded));

        return new $this->ruleMap[$rule](...$options);
    }

    public function getFieldValue($field)
    {
        return $this->data[$field] ?? null;
    }

    public function setRules($rules)
    {
        $this->rules = $rules;
    }

    public function passes()
    {
        return empty($this->errors());
    }

    public function errors($key = null)
    {
        return $key ? $this->errorBag->errors[$key] : $this->errorBag->errors;
    }

    public function alias($field)
    {
        return $this->aliases[$field] ?? $field;
    }

    public function setAliases(array $aliases)
    {
        $this->aliases = $aliases;
    }
}
