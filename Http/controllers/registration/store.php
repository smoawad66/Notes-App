<?php

use Core\App;
use Core\Database;
use Core\Authenticator;
use Http\Forms\RegisterationForm;

$db = App::resolve(Database::class);

// Validation
RegisterationForm::validate($attributes = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

// Creation
$db->query("INSERT INTO users (name, email, password) VALUES(?, ?, ?)", [
    $attributes['name'], $attributes['email'], password_hash($attributes['password'], PASSWORD_BCRYPT)
]);

// Log the new user in and redirect him to the home page
$new_user = $db->query("SELECT * FROM users WHERE email = ?", [$attributes['email']])->find();
(new Authenticator)->login($new_user);

redirect('/');
