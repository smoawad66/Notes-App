<nav class="bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center justify-between">
                <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="50" height="50" viewBox="0 0 54 33">
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
                <div>
                    <div class="ml-10 flex items-baseline space-x-4">

                        <?php
                        use Core\Session;
                        $ds = "text-gray-300 hover:bg-gray-700 hover:text-white";
                        $cs = "bg-gray-700 text-white";
                        ?>

                        <a href="/" class="<?= isUrl("/") ? $cs : $ds; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <?php if (auth_user()) : ?>
                            <a href="/notes" class="<?= isUrl("/notes") ? $cs : $ds; ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                        <?php endif; ?>
                        <a href="/about" class="<?= isUrl("/about") ? $cs : $ds; ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="/contact" class="<?= isUrl("/contact") ? $cs : $ds; ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="relative ml-3">
                        <div class="flex items-center">
                            <?php if (auth_user()) : ?>
                                <div class="flex px-6 items-center">
                                    <img class="h-10 w-10 mr-6 rounded-full" src="https://lh3.googleusercontent.com/a/ACg8ocLvR9p4qkuYMFoZJU9DtPyEUqn1_4dSNeKzf2Gze21gAvMVeB4z=s360-c-no" alt="">
                                    <p class="text-white">Hello, <?= Session::get('user')['name'] ?></p>
                                </div>
                                <form action="/session" method="POST">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="text-white rounded-md px-3 py-2 text-sm font-medium <?= $ds ?>">Log out</button>
                                </form>
                            <?php else : ?>
                                <a href="/login" class="<?= isUrl("/login") ? $cs : $ds; ?> rounded-md px-3 mr-4 py-2 text-sm font-medium">Log in</a>
                                <a href="/register" class="<?= isUrl("/register") ? $cs : $ds; ?> rounded-md px-3 py-2 text-sm font-medium">Register</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</nav>