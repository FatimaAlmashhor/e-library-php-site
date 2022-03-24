<?php

namespace App\Utils;


class Validation
{
    private $checkEmail = false;
    private $checkPassword = false;
    function  password(string $pass, string $cpass)
    {
        if (!empty($pass) && !empty($cpss)) {
            if ($cpass === $pass) {
                $this->checkPassword = true;
            }
        }
        return  $this->checkPassword;
    }

    function email(string $email): Validation
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->checkEmail = true;
        }
        return $this;
    }
    public function check()
    {
        return $this->checkPassword;
    }
}