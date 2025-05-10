<div id='hero' class='relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 flex h-screen overflow-hidden'>
    
    <div class="absolute inset-0">
        
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-gradient-to-br from-yellow-500 to-red-500 rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-float-slow"></div>
        <div class="absolute top-1/3 right-1/3 w-96 h-96 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-float-medium"></div>
        <div class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-gradient-to-br from-green-500 to-blue-500 rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-float-fast"></div>
        
        <div class="absolute inset-0 bg-grid-white/[0.05] bg-[length:50px_50px] animate-grid-fade"></div>
        
       
        <div class="stars"></div>
    </div>

    <div class='relative w-full mx-auto lg:max-w-screen-xl flex flex-col justify-center items-center text-center text-white'>
       
        <div class='flex flex-col items-center animate-fade-in'>
            <p class='text-4xl font-bold animate-slide-down'>
                Hi! <span class='wave inline-block'>👋</span>
            </p>
            <p class='text-5xl font-bold mt-2 animate-slide-up opacity-0' style="animation-delay: 0.5s">
                I'm <span class='text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-yellow-300 animate-gradient'>Daniel</span>,
            </p>
            <p class='text-5xl font-bold animate-slide-up opacity-0' style="animation-delay: 1s">
                Your Software Engineer
            </p>
        </div>
        

        <div class='mt-6  animate-fade-in opacity-0' style="animation-delay: 1.5s">
            <p class='text-l4 px-3 max-w-2xl'>
                A seasoned fullstack engineer with 4+ years of experience creating modern, responsive web interfaces 
                for enterprises in the Automobile, Entertainment and <br/> E-commerce industries. I don't just code, I analyse, understand, and make sure your ideas/products are feasible and marketable.
            </p>
        </div>
        
       
        <div class='mt-8 animate-fade-in opacity-0' style="animation-delay: 2s">
            <p class='text-lg font-semibold'>Follow me:</p>
            <div class='flex space-x-4 mt-4'>
                <a href='https://www.linkedin.com/in/daniel-chinemerem/' 
                   class='bg-white/10 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white hover:text-blue-800 transform hover:scale-110 transition-all duration-300'>
                    <i class='fab fa-linkedin-in fa-2x'></i>
                </a>
                <a href='https://github.com/codacdanny' 
                   class='bg-white/10 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white hover:text-gray-800 transform hover:scale-110 transition-all duration-300'>
                    <i class='fab fa-github fa-2x'></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>

    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .bg-grid-white {
        background-image: linear-gradient(to right, rgba(255,255,255,0.1) 1px, transparent 1px),
                        linear-gradient(to bottom, rgba(255,255,255,0.1) 1px, transparent 1px);
    }


    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @keyframes float-slow {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(20px, -20px) rotate(5deg); }
        50% { transform: translate(-20px, -40px) rotate(-5deg); }
        75% { transform: translate(-30px, -20px) rotate(5deg); }
    }

    @keyframes float-medium {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(-25px, -25px) rotate(-3deg); }
        66% { transform: translate(25px, -35px) rotate(3deg); }
    }

    @keyframes float-fast {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        50% { transform: translate(-15px, -15px) rotate(5deg); }
    }

    @keyframes grid-fade {
        0%, 100% { opacity: 0.05; }
        50% { opacity: 0.1; }
    }

    @keyframes slide-up {
        0% { transform: translateY(20px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }

    @keyframes slide-down {
        0% { transform: translateY(-20px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }

    @keyframes fade-in {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .animate-float-slow { animation: float-slow 8s infinite; }
    .animate-float-medium { animation: float-medium 12s infinite; }
    .animate-float-fast { animation: float-fast 6s infinite; }
    .animate-gradient { 
        background-size: 200% 200%;
        animation: gradient 8s ease infinite;
    }
    .animate-slide-up {
        animation: slide-up 0.8s ease forwards;
    }
    .animate-slide-down {
        animation: slide-down 0.8s ease forwards;
    }
    .animate-fade-in {
        animation: fade-in 1s ease forwards;
    }

    .stars {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(2px 2px at 20px 30px, #eee, rgba(0,0,0,0)),
                        radial-gradient(2px 2px at 40px 70px, #fff, rgba(0,0,0,0)),
                        radial-gradient(2px 2px at 50px 160px, #ddd, rgba(0,0,0,0)),
                        radial-gradient(2px 2px at 90px 40px, #fff, rgba(0,0,0,0));
        background-repeat: repeat;
        background-size: 200px 200px;
        opacity: 0.1;
        animation: twinkle 4s ease-in-out infinite;
    }

    @keyframes twinkle {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.2; }
    }
</style>