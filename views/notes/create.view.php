<?php
require base_path('views/partials/layout-top.php');
require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <div class="space-y-12">
                <div class="col-span-full">
                    <label for="body" class="block text-lg font-medium leading-6">Body</label>
                    <div class="mt-2">
                        <textarea style="resize: none; height: 200px;" id="body" name="body" rows="10" class="block w-full rounded-md border-0 py-2 px-3 bg-neutral-900 shadow-sm outline-none ring-1 ring-inset ring-gray-500 placeholder:text-gray-300 sm:text-sm sm:leading-6" placeholder="Type your note..." required><?= htmlspecialchars($note['body'] ?? '') ?></textarea>
                    </div>
                    <?php partial('error.php', ['message' => error('body')]); ?>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Create</button>
            </div>
        </form>

        <?php partial('link.php', ['link' => '/notes', 'text' => 'Go back']); ?>
    </div>
</main>

<?php partial('layout-bottom.php'); ?>