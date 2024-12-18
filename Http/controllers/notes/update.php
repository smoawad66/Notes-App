<?php

use Core\Session;
use Core\Database;
use Core\App;
use Http\Forms\NotesForm;

$user_id = Session::get('user')['id'];
$db = App::resolve(Database::class);

$note = $db->query("SELECT * FROM notes WHERE id = ?", [$_POST['id']])->findOrFail();

authorize($note['user_id'] == $user_id);

// Pin and unpin notes
if (!isset($_POST['body'])) {
    $db->query("UPDATE notes SET is_pinned = ?, updated_at = ? WHERE id = ?", [
        (int) !$note['is_pinned'],
        date('Y-m-d H:i:s', time()),
        $note['id']
    ]);

    echo $note['is_pinned'];

    redirect("/note?id={$note['id']}");
}


// Validating input
NotesForm::validate($attributes = [
    'body' => $_POST['body'],
]);


$db->query("UPDATE notes SET body = ? WHERE id = ?", [
    $attributes['body'],
    $note['id'],
]);

redirect("/notes");
