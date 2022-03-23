<?php

namespace App;

class Utiles
{
    static function  validPassword(string $pass, string $cpass): bool
    {
        if (!empty($pass) && !empty($cpss)) {
            if ($cpass === $pass) {
                return true;
            }
        }
        return false;
    }

    static function validEmail(string $email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}