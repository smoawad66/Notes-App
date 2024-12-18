<?php require base_path('views/partials/layout-top.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Sorry, Page Not Found.</h1>
        <p class="my-6">
            <?php partial('link.php', ['link' => '/notes', 'text' => 'Go back']); ?>
        </p>
    </div>
</main>

<?php partial('layout-bottom.php'); ?>