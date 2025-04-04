<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinemerem Daniel</title>
    @vite('resources/css/app.css')
    @vite('resources/css/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<header class='bg-white flex shadow-sm'>
    <div class='w-full mx-auto lg:max-w-screen-xl flex flex-1 items-center justify-between px-4  h-16 text-grey-800 font-bold'>
        <div class='flex   items-center gap-2 py-2'>
            <div class='bg-yellow-500 p-4 h-8 rounded-full'></div>
            <div class=' text-center text-4xl'>Daniel</div>
        </div>
        <div class='flex  text-center gap-6 py-2'>
            <a href="{{ url('/') }}">
                Home
            </a>
            <a href="{{ route('contact') }}">
                Contact me
            </a>
        </div>
        <a href="{{ route('contact') }}" class="inline-block text-center py-3 px-6 rounded-sm bg-yellow-500 text-white font-semibold hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition">
            Let's Talk
        </a>
    </div>
</header>
<main class='bg-gray-800 '>
    @yield('main')
</main>
<footer class='bg-white flex h-[40] px-4'>
    <div class='w-full mx-auto lg:max-w-screen-xl'>
        <div class=' flex flex-1 items-center justify-between h-20 text-grey-800 font-bold'>
            <div class='flex   items-center gap-2 py-4'>
                <div class='bg-yellow-500 p-4 h-8 rounded-full'></div>
                <div class=' text-center text-4xl'>Daniel</div>
            </div>
            <div class='flex space-x-4 mt-4'>
                 <a href='https://www.linkedin.com/in/daniel-chinemerem/' class='bg-white text-blue-800 p-3 rounded-full hover:bg-gray-200'>
                     <i class='fab fa-linkedin-in fa-2x'></i>
                </a>
                <a href='https://github.com/codacdanny' class='bg-white text-gray-800 p-3 rounded-full hover:bg-gray-200'>
                    <i class='fab fa-github fa-2x'></i>
                </a>
            </div>
    </div>
    <div class='h-[20]'>

                <div class='flex  text-center gap-6 py-4'>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                    <a href="{{ route('contact') }}">
                        Contact me
                    </a>
                </div>
                <div class='bg-gray-100 w-full h-[2px] my-[20px]' ></div>
                    <div class='flex justify-between gap-4 text-wrap mb-4'>
                        <p class='text-center text-gray-500'>© 2023 Daniel. All rights reserved.</p>
                        <p class='text-center text-gray-500'>Made with ❤️ by Daniel</p>
                        <p class='text-center text-gray-500'>Powered by Laravel</p>
                    </div>
                </div>
    </div>
</footer>
</body>
</html>