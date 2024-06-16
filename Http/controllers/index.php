<?php

use Core\App;
use Core\Database;
use Core\Session;

$heading = 'Home';

$db = App::resolve(Database::class);
$user_id = Session::get('user')['id'] ?? null;

$notes = $db->query("SELECT * FROM notes WHERE user_id = ? and pinned = ? order by updated_at desc", [
    $user_id, 1,
])->get();

view("index.view.php", [
    'heading' => $heading,
    'notes' => $notes,
]);
