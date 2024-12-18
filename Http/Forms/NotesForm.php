<?php

namespace Http\Forms;

use Core\Validator;

class NotesForm extends Form
{
    public function __construct($attributes)
    {
        $this->attributes = $attributes;

        if (!Validator::string($attributes['body'], 1)) {
            $this->errors['body'] = 'Note body can\'t be empty.';
        }
    }
}
