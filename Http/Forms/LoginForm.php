<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm extends Form
{
    public function __construct($attributes)
    {
        $this->attributes = $attributes;

        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Please enter a valid email.';
        }

        if (!Validator::string($attributes['password'], 1, 255)) {
            $this->errors['password'] = 'Please enter the password.';
        }
    }
}
