<?php require base_path('views/partials/layout-top.php') ?>

<main>
    <div class="flex min-h-full flex-col justify-center mt-12 px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Register for a new account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/register" method="POST">
                <div>
                    <div class="mt-2">
                        <input id="name" name="name" value="<?= old('name') ?>" placeholder="Name" required class="block w-full bg-gray-700 rounded-md border-0 py-1.5 px-1.5 text-white shadow-sm placeholder:text-gray-300">
                    </div>
                    <?php partial('error.php', ['message' => error('name')]); ?>
                </div>

                <div>
                    <div class="mt-2">
                        <input id="email" name="email" value="<?= old('email') ?>" autocomplete="email" required placeholder="Email address" class="block w-full bg-gray-700 rounded-md border-0 py-1.5 px-1.5 text-white shadow-sm placeholder:text-gray-300">
                    </div>
                    <?php partial('error.php', ['message' => error('email')]); ?>
                </div>

                <div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="Password" class="block w-full bg-gray-700 rounded-md border-0 py-1.5 px-1.5 text-white shadow-sm placeholder:text-gray-300">
                    </div>
                    <?php partial('error.php', ['message' => error('password')]); ?>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>

            <?php partial('link.php', ['link' => '/login', 'text' => 'Already have an account?']); ?>

        </div>
    </div>

</main>

<?php partial('layout-bottom.php'); ?>