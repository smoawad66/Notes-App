<nav class="bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
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
                                    <img class="h-10 w-10 mr-6 rounded-full" src="https://lh3.googleusercontent.com/a/ACg8ocI_oJyuM23WEE6yAzyIYqKkhF3iI5_fxGtfmfsNUyGtNHBfA7o=s378-c-no" alt="">
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