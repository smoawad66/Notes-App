<div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <?php if ($notes) : ?>
        <?php foreach ($notes as $note) : ?>
            <a href="/note?id=<?= $note['id'] ?>" class="bg-gray-800 rounded-lg shadow-md w-full sm:max-w-full h-60 break-words md:w-auto h-full p-4 text-white no-underline hover:scale-105 transition-transform duration-200 max-h-60">
                <!-- Display a note in a <pre> element -->
                <?php partial('pre.php', ['body' => substr($note['body'], 0, 150)]); ?>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <h3>No thing here.</h3>
    <?php endif; ?>

</div>