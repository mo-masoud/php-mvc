<?php
namespace MasoudMVC\Support;

class Hash
{
    public static function password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function make($value)
    {
        return sha1($value . time());
    }

    public static function verify($password, $hashedValue)
    {
        return password_verify($password, $hashedValue);
    }
}
