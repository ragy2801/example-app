<!DOCTYPE html>

<title>Laravel From Scratch Blog</title>
<link rel="stylesheet" href="https:unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md::item-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracast Logo" width="165" height="16">
                </a>
            </div>
            <div class="mt-8 md:mt-0">
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/" class="transition-colors duration-300 hover:bg-blue-600 bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-6">Subscribe for Updates</a>
            </div>

        </nav>

        {{ $slot }}

        <footer class="bg-gray-100 border-black hoverborder-opacity-5  rounded-xl text-center mt-16 py-16 px-10">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bigs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg-gray-200 rounded-full">

                    <form action="#" method="POST" class="lg:flex item-center text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            <input id="email" type="text"  placeholder="Your email address" class="lg:bg-transparent pl-4 focus-within:outline-none">

                        </div>

                        <button type="submit" class=" bg-blue-500 mt-4 lg:mt-0 hover:bg-blue-600 lg:ml-3 rounded-full text-xs font-semibold text-white upercase py-3 px-8">Subscribe</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash />

</body>
