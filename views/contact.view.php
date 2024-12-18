<?php
require base_path('views/partials/layout-top.php');
require base_path('views/partials/banner.php');
?>

<main>

    <div class="bg-gray ml-36 mt-6 rounded-lg">
        <!-- <h2 class="text-2xl font-semibold mb-4">Get in Touch</h2> -->
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-white">Name</label>
                <input type="text" id="name" name="name" class="outline-none mt-2 w-1/2 px-3 py-2 bg-neutral-900 border border-gray-600 rounded-md" placeholder="Name" required>
            </div>
            <div>
                <label for="email" class="block text-white">Email</label>
                <input type="email" id="email" name="email" class="outline-none mt-2 w-1/2 px-3 py-2 bg-neutral-900 border border-gray-600 rounded-md" placeholder="Email" required>
            </div>
            <div>
                <label for="message" class="block text-white">Message</label>
                <textarea id="message" name="message" rows="4" class="outline-none mt-2 w-1/2 px-3 py-2 bg-neutral-900 border border-gray-600 rounded-md resize-none" placeholder="Type your message..." required></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Send Message</button>
            </div>
        </form>
    </div>

</main>

<?php partial('layout-bottom.php'); ?>