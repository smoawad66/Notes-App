<?php
require base_path('views/partials/layout-top.php');
require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/notes/create" class="bg-green-600 text-white rounded py-2 px-3 hover:bg-green-700">Create Note</a>
        <?php partial('notes-grid.php', ['notes' => $notes]) ?>
    </div>
</main>

<?php partial('layout-bottom.php'); ?>