<?php

namespace Core;


class Validator
{

    public static function string($value, $min = 1, $max = INF)
    {

        $value = trim($value);

        return strlen($value) < $min or strlen($value) > $max;
    }

    public static function verifEmail($value)
    {

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
