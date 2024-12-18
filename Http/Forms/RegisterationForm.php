<?php

namespace Http\Forms;

use Core\App;
use Core\Database;
use Core\Validator;

class RegisterationForm extends Form
{
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
        
        if(!Validator::string($attributes['name'], 1, 255)){
            $this->errors['name'] = 'Please enter your name.';
        }

        if(!Validator::email($attributes['email'])){
            $this->errors['email'] = 'Please enter a valid email.';
        }

        if(!Validator::string($attributes['password'], 7, 255)){
            $this->errors['password'] = "Password length should not be less than 7 characters.";
        }

        $user = App::resolve(Database::class)->query("SELECT * FROM users where email = ?", [
            $attributes['email'],
        ])->find();
        
        if($user){
            $this->errors['email'] = 'This email address already exists.';
        }
    }

}
