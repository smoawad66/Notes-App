<?php

use Core\App;
use Core\Database;
use Core\Session;

$heading = 'Home';

$db = App::resolve(Database::class);
$user_id = Session::get('user')['id'] ?? null;

$notes = $db->query("SELECT * FROM notes WHERE user_id = ? AND is_pinned = ? ORDER BY updated_at DESC", [
    $user_id, 1,
])->get();

view("index.view.php", [
    'heading' => $heading,
    'notes' => $notes,
]);
