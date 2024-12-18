<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


// Validation
$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

// Attempt to log the user in
$logged_in = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$logged_in) {
    $form->error('login', 'No matching account found for that email address and password.')->throw();
}

redirect('/');
