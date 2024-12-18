<?php

namespace Http\Forms;

use Core\ValidationException;

class Form
{
    protected $errors = [];
    public $attributes = [];

    public static function validate($attributes)
    {
        $instance = new static($attributes);
        return $instance->failed() ? $instance->throw() : $instance;
    }
    
    public function throw(){ValidationException::throw($this->errors(), $this->attributes);}

    public function failed(){return count($this->errors);}

    public function errors(){return $this->errors;}

    public function error($key, $value)
    {
        $this->errors[$key] = $value;
        return $this;
    }
}