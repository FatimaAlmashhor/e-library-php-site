<?php

namespace App\Utils;


class Validation
{

    /**
     * @var array $patterns
     */
    public $patterns = array(
        'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
        'words'         => '[\p{L}\s]+',
        'int'           => '[0-9]+',
        'float'         => '[0-9\.,]+',
        'tel'           => '[0-9+\s()-]+',
        'text'          => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
        'file'          => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+\.[A-Za-z0-9]{2,4}',
        'folder'        => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+',
        'address'       => '[\p{L}0-9\s.,()°-]+',
        'date_dmy'      => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
        'date_ymd'      => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email'         => '[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+[.]+[a-z-A-Z]'
    );

    /**
     * @var array $errors
     */
    public $errors = array();


    /**
     * for specify the name of the varable
     * @param  string $name
     * @return  this
     */
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }


    /**
     * for specify the name of the varable
     * @param  string $value
     * @return  this
     */
    public function value($value)
    {
        $this->value = $value;
        return $this;
    }


    public function format($format)
    {
        if (isset($this->patterns[$format])) {

            $regex = '/^(' . $this->patterns[$format] . ')$/u';
            if ($this->value != '' && !preg_match($regex, $this->value)) {
                $this->errors[] = "The `$this->name` not valid  ";
            } else {
                return $this;
            }
        } else {
            $this->errors[] = "The $format not formate  ";
        }
    }


    public function required()
    {
        if ($this->value == '' || $this->value == null) {
            $this->errors[] = 'The' . $this->name . ' have no value ';
        }
        return $this;
    }


    public function min($length)
    {
        // 
        if (is_string($this->value)) {

            if (strlen($this->value) < $length) {
                $this->errors[] = 'This ' . $this->name . ' less than ' . $length . '';
            }
        } else {
            // if the value is number
            if ($this->value < $length) {
                $this->errors[] = 'This ' . $this->name . ' less than ' . $length . '';
            }
        }
        return $this;
    }
    public function max($length)
    {
        // 
        if (is_string($this->value)) {

            if (strlen($this->value) > $length) {
                $this->errors[] = 'This ' . $this->name . ' more than ' . $length . '';
            }
        } else {
            // if the value is number
            if ($this->value > $length) {
                $this->errors[] = 'This ' . $this->name . ' more than ' . $length . '';
            }
        }
        return $this;
    }
    public function equal($length)
    {
        // 
        if (is_string($this->value)) {

            if (strlen($this->value) == $length) {
                $this->errors[] = 'This ' . $this->name . ' is not equal ' . $length . '';
            }
        } else {
            // if the value is number
            if ($this->value > $length) {
                $this->errors[] = 'This ' . $this->name . ' is not equal ' . $length . '';
            }
        }
        return $this;
    }


    public function isSuccess()
    {
        if (empty($this->errors)) return true;
    }

    public function getErrors()
    {
        if (!$this->isSuccess()) return $this->errors;
    }


    public function check()
    {

        if (!$this->isSuccess()) {

            foreach ($this->getErrors() as $error) {
                echo "$error\n";
            }
            exit;
        } else {
            return true;
        }
    }
}