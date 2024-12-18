<?php

use Core\Session;
use Core\Database;
use Core\App;
use Http\Forms\NotesForm;

$user_id = Session::get('user')['id'];

$db = App::resolve(Database::class);

// Validating input
NotesForm::validate($attributes = [
    'body' => $_POST['body'],
]);

$db->query("INSERT INTO notes (body, user_id) VALUES (?, ?)", [
    $attributes['body'], $user_id,
]);

redirect("/notes");