<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$user_id = Session::get('user')['id'];

$heading = 'Edit Note';

$note = $db->query("SELECT * FROM notes WHERE id = ?", [$_GET['id']])->findOrFail();
authorize($note['user_id'] == $user_id);

view("notes/edit.view.php", [
    'errors' => [],
    'note' => $note,
    'heading' => $heading
]);