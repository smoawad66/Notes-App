<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$user_id = Session::get('user')['id'];


$note = $db->query("SELECT * FROM notes WHERE id = ?", [$_POST['id']])->findOrFail();
authorize($note['user_id'] == $user_id);

$db->query("DELETE FROM notes WHERE id = ?", [$_POST['id']]);

redirect("/notes");