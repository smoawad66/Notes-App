<?php require base_path('views/partials/layout-top.php') ?>

<main>
    <div class="flex min-h-full flex-col justify-center mt-12 px-6 py-12 lg:px-8">
        <div class="flex justify-center mx-auto w-full max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="80" height="80" viewBox="0 0 54 33">
                <g clip-path="url(#prefix__clip0)">
                    <path fill="#35bbe8" fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd" />
                </g>
                <defs>
                    <clipPath id="prefix__clip0">
                        <path fill="#fff" d="M0 0h54v32.4H0z" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Login to your account</h2>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/session" method="POST">
                <div>
                    <div class="mt-2">
                        <input id="email" name="email" value="<?= old('email') ?>" autocomplete="email" placeholder="Email address" required class="outline-none block w-full rounded-md border-0 py-1.5 px-2 text-white bg-gray-700 shadow-sm placeholder:text-gray-300 sm:text-sm sm:leading-6">
                    </div>

                    <?php partial('error.php', ['message' => error('email')]); ?>

                </div>

                <div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Password" required class="outline-none block w-full rounded-md border-0 py-1.5 px-2 text-white bg-gray-700 shadow-sm placeholder:text-gray-300 sm:text-sm sm:leading-6">
                    </div>

                    <?php partial('error.php', ['message' => error('password')]); ?>

                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
                <?php partial('error.php', ['message' => error('login')]); ?>

            </form>

            <?php partial('link.php', ['link' => '/register', 'text' => "Don't have an account?"]); ?>

        </div>
    </div>
</main>

<?php partial('layout-bottom.php'); ?>