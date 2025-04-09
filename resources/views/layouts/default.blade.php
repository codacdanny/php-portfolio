<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinemerem Daniel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<header x-data="{ isOpen: false }" class='bg-white shadow-sm relative'>
    <div class='w-full mx-auto lg:max-w-screen-xl flex flex-wrap lg:flex-nowrap items-center justify-between px-4 py-3 lg:py-0 lg:h-16'>
        <!-- Logo -->
        <a href="{{ url('/') }}">
            <div class='flex items-center gap-2'>
                <div class='bg-yellow-500 p-4 h-8 rounded-full'></div>
                <div class='text-3xl lg:text-4xl font-bold'>Daniel</div>
            </div>
        </a>

        <!-- Mobile Menu Button -->
        <button @click="isOpen = !isOpen" class="lg:hidden p-2 text-gray-700 hover:text-yellow-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Navigation Links -->
        <nav class="w-full lg:w-auto  flex-col lg:flex-row lg:flex"
             :class="{'hidden': !isOpen, 'flex': isOpen}"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform -translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class='flex flex-col  lg:flex-row items-center gap-6 py-4 lg:py-0'>
                <a href="{{ url('/') }}" class="hover:text-yellow-500 transition">
                    Home
                </a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-500 transition">
                    Contact me
                </a>
            </div>
            
            <!-- CTA Button -->
        </nav>
        <div class="w-full lg:w-auto  flex-col lg:flex-row lg:flex"
             :class="{'hidden': !isOpen, 'flex': isOpen}"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform -translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0">

            <div class="mt-4 lg:mt-0 lg:ml-6">
                <a href="{{ route('contact') }}" 
                   class="block w-full lg:w-auto text-center py-3 px-6 rounded-sm bg-yellow-500 text-white font-semibold 
                          hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 
                          focus:ring-offset-2 transition">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>
</header>
<main class='bg-gray-800 '>
    @yield('main')
</main>
<footer class='bg-white flex h-[50] px-4 pb-4'>
    <div class='w-full mx-auto lg:max-w-screen-xl'>
        <div class=' flex flex-1 items-center justify-between h-20 text-grey-800 font-bold'>
        <a href="{{ url('/') }}">
            <div class='flex items-center gap-2'>
                <div class='bg-yellow-500 p-4 h-8 rounded-full'></div>
                <div class='text-3xl lg:text-4xl font-bold'>Daniel</div>
            </div>
        </a>
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