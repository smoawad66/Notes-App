<?php

use Core\Database;
use Core\App;
use Core\Session;

$user_id = Session::get('user')['id'];

$db = App::resolve(Database::class);

$heading = 'Notes';

$notes = $db->query("SELECT * FROM notes WHERE user_id = ? ORDER BY created_at DESC", [$user_id])->get();

view("notes/index.view.php", [
    'notes' => $notes,
    'heading' => $heading
]);
