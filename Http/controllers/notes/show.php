<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$user_id = Session::get('user')['id'];

$heading = 'Note';

$note = $db->query("SELECT * FROM notes WHERE id = ?", [$_GET['id']])->findOrFail();
authorize($note['user_id'] == $user_id);

view("notes/show.view.php", [
    'note' => $note,
    'heading' => $heading,
]);