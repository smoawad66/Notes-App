<?php
require base_path('views/partials/layout-top.php');
require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="relative bg-gray-800 p-6 pr-12 rounded-lg shadow-md max-w-full">
            <!-- Edit link -->
            <a href="/note/edit?id=<?= $note['id'] ?>" class="absolute bottom-4 right-5 bg-yellow-700 text-white rounded py-2 px-4 hover:bg-yellow-800">Edit</a>

            <!-- Toggle pin -->
            <form action="/note" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="absolute top-1 right-1" title="<?= $note['pinned'] ? 'Unpin' : 'Pin' ?>">
                    <?php if ($note['pinned']) : ?>
                        <p class="absolute right-1 top-1 text-2xl"><i class="bi bi-pin-angle-fill"></i></p>
                    <?php else : ?>
                        <p class="absolute right-1 top-1 text-2xl "><i class="bi bi-pin-angle"></i></p>
                    <?php endif; ?>

                </button>
            </form>
            
            <!-- Display a note in a <pre> element -->
            <?php partial('pre.php', ['body' => $note['body'], 'overflow' => 'auto']); ?>
            
            <br>
            
            <!-- Delete a note -->
            <form method="POST" action="/note">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="bg-red-700 text-white rounded py-2 px-4 hover:bg-red-800">Delete</button>
            </form>

        </div>

        <?php partial('link.php', ['link' => '/notes', 'text' => 'Go back']); ?>

    </div>
</main>

<?php partial('layout-bottom.php'); ?>