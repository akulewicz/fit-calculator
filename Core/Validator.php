<?php

namespace Core;

class Validator
{
    public static function number(string $value): bool
    {
        return (!empty($value)) && filter_var($value, FILTER_VALIDATE_INT);
    }
}