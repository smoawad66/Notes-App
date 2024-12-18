<?php
require base_path('views/partials/layout-top.php');
require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php if (Core\Session::has('user')) : ?>
            <h1 class="text-3xl font-bold mb-5 mt-5">Pinned Notes</h1>
            <?php partial('notes-grid.php', ['notes' => $notes]) ?>
        <?php else : ?>
            <h2 class="text-2xl my-10">
                Notes App is a sleek and intuitive note-taking web application designed to simplify 
                your digital note-taking experience. With Notes App, jotting down ideas, 
                organizing tasks, and keeping track of important 
                notes has never been easier.
                <div class="flex items-center">
                    <?php partial('link.php', ['link' => '/login', 'text' => 'Login']);?> &nbsp; or &nbsp; 
                    <?php partial('link.php', ['link' => '/register', 'text' => 'Register']);?>&nbsp;to use the App.
                </div>
            </h2>
        <?php endif; ?>
    </div>
</main>

<?php partial('layout-bottom.php') ?>