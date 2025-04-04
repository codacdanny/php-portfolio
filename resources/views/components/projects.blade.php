<div class='bg-gray-900 py-16 px-8'>
    <div class='w-full mx-auto lg:max-w-screen-xl text-center text-white'>
        <h2 class='text-3xl font-bold mb-8 text-left'>My Projects</h2>
        <p class='text-lg mb-12 text-left w-[80%] lg:w-[60%]'>
            Here are some of the projects I have worked on, showcasing my skills in fullstack development, responsive design, and modern web technologies.
        </p>
    </div>

    <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full mx-auto lg:max-w-screen-xl'>
        <!-- Project Card 1 -->
        <div class='bg-gray-800 rounded-lg shadow-lg p-6'>
            <h3 class='text-xl font-semibold text-yellow-400 mb-4'>Pamtech Autoparts</h3>
            <p class='text-gray-300 mb-4'>
                A scalable e-commerce platform built with PHP, boostrap, and SQL, featuring real-time inventory updates and product purchase.
            </p>
            <div class='flex flex-wrap gap-2 mb-4'>
                <span class='bg-blue-500 text-white text-sm px-3 py-1 rounded-full'>PHP</span>
                <span class='bg-green-500 text-white text-sm px-3 py-1 rounded-full'>Boostrap css</span>
                <span class='bg-yellow-500 text-white text-sm px-3 py-1 rounded-full'>SQL</span>
            </div>
            <a href='https://pamtechautoparts.com/' class='text-blue-400 hover:underline'>View Project</a>
        </div>

        <!-- Project Card 2 -->
        <div class='bg-gray-800 rounded-lg shadow-lg p-6'>
            <h3 class='text-xl font-semibold text-yellow-400 mb-4'>Pamtech Autoland</h3>
            <p class='text-gray-300 mb-4'>
                A responsive dashboard for auto repair customers, built with Next Js and integrated with RESTful APIs for real-time Car VIN check.
            </p>
            <div class='flex flex-wrap gap-2 mb-4'>
                <span class='bg-red-500 text-white text-sm px-3 py-1 rounded-full'>Next js</span>
                <span class='bg-blue-500 text-white text-sm px-3 py-1 rounded-full'>Node Js</span>
                <span class='bg-purple-500 text-white text-sm px-3 py-1 rounded-full'>Chakra UI</span>
            </div>
            <a href='#' class='text-blue-400 hover:underline'>View Project</a>
        </div>
        <!-- Project Card 3 -->
        <div class='bg-gray-800 rounded-lg shadow-lg p-6'>
            <h3 class='text-xl font-semibold text-yellow-400 mb-4'>Pamtech Group</h3>
            <p class='text-gray-300 mb-4'>
                Built internal tools like an Inventory manager, Workshop manager, Learning management systems, and Car rental managers      
            </p>
            <div class='flex flex-wrap gap-2 mb-4'>
                <span class='bg-blue-500 text-white text-sm px-3 py-1 rounded-full'>Next.js</span>
                <span class='bg-teal-500 text-white text-sm px-3 py-1 rounded-full'>Tailwind CSS</span>
                <span class='bg-gray-500 text-white text-sm px-3 py-1 rounded-full'>Vercel</span>
            </div>
            <a href='https://pamtechgroup.com/' class='text-blue-400 hover:underline'>View Project</a>
        </div>
    </div>
    <div class='w-full mt-12 mx-auto lg:max-w-screen-xl text-center text-white'>
         <h2 class='text-3xl font-bold mb-8 text-left'>Have Any Ideas?</h2>
        <p class='text-lg mb-12 text-left w-[80%] lg:w-[60%]'>
            I am always open to new ideas and collaborations. If you have a project in mind or want to discuss potential opportunities, feel free to reach out! 
        </p>
        <div class='flex text-left'>
            <a href="{{ route('contact') }}" class="inline-block text-center py-3 px-6 rounded-sm bg-yellow-500 text-white font-semibold hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition">
            Let's Talk
            </a>        
        </div>
    </div>
</div>