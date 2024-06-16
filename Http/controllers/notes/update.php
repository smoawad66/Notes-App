<?php

use Core\Session;
use Core\Database;
use Core\App;
use Http\Forms\NotesForm;

$user_id = Session::get('user')['id'];

$db = App::resolve(Database::class);


$note = $db->query("SELECT * FROM notes WHERE id = ?", [$_POST['id']])->findOrFail();

authorize($note['user_id'] == $user_id);

// Pin
if (!isset($_POST['body'])) {
    $db->query("UPDATE notes SET pinned = ? WHERE id = ?", [
        (int) !$note['pinned'], $note['id']
    ]);

    redirect("/note?id={$note['id']}");
}


// Validating input
NotesForm::validate($attributes = [
    'body' => $_POST['body'],
]);


$db->query("UPDATE notes SET body = ? WHERE id = ?", [
    $attributes['body'], $note['id'],
]);

redirect("/notes");
