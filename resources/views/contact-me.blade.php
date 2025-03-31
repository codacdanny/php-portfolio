@extends('layouts.default')

@section('main')
<div class='relative bg-gradient-to-r from-blue-900 via-gray-900 to-black py-16 px-8 overflow-hidden'>
    <!-- Decorative Background -->
    <div class='absolute inset-0'>
        <svg class='absolute top-0 left-0 w-96 h-96 text-blue-700 opacity-30' fill='currentColor' viewBox='0 0 512 512'>
            <circle cx='256' cy='256' r='256'></circle>
        </svg>
        <svg class='absolute bottom-0 right-0 w-96 h-96 text-gray-700 opacity-30' fill='currentColor' viewBox='0 0 512 512'>
            <circle cx='256' cy='256' r='256'></circle>
        </svg>
    </div>

    <!-- Content Wrapper -->
    <div class='relative w-full mx-auto lg:max-w-screen-lg'>
        <!-- Header Section -->
        <div class='text-left text-white mb-12'>
            <h2 class='text-3xl font-extrabold mb-4'>Let's Connect</h2>
            <p class='text-lg w-[80%] lg:w-[60%]'>
                Whether you have a question, a project idea, or just want to say hi, I'd love to hear from you. 
                Fill out the form below, and I'll get back to you as soon as possible.
            </p>
        </div>

        <!-- Contact Section -->
        <div class='grid grid-cols-1 lg:grid-cols-2 gap-12'>
            <!-- Left Column: Contact Info -->
            <div class='text-white space-y-8 p-8 rounded-lg shadow-lg bg-gray-800'>
                <h3 class='text-3xl font-semibold'>Get in Touch</h3>
                <p class='text-gray-300'>
                    I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision. 
                    Feel free to reach out through any of the channels below.
                </p>
                <div class='space-y-4'>
                    <div class='flex items-center'>
                        <i class='fas fa-envelope text-yellow-500 text-xl mr-4'></i>
                        <span>danielchinemerem302@gmail.com</span>
                    </div>
                    <div class='flex items-center'>
                        <i class='fas fa-phone text-yellow-500 text-xl mr-4'></i>
                        <span>+234 815 643 8520</span>
                    </div>
                </div>
                <div class='mt-8'>
                    <h4 class='text-xl font-semibold mb-2'>Follow Me</h4>
                    <div class='flex space-x-4 mt-4'>
                        <a href='https://www.linkedin.com/in/daniel-chinemerem/' class='bg-white text-blue-800 p-3 rounded-full hover:bg-gray-200'>
                            <i class='fab fa-linkedin-in fa-2x'></i>
                        </a>
                        <a href='https://github.com/codacdanny' class='bg-white text-gray-800 p-3 rounded-full hover:bg-gray-200'>
                            <i class='fab fa-github fa-2x'></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Contact Form -->
            <div class='bg-gray-800 p-8 rounded-lg shadow-lg'>
                <form method="POST" class='space-y-6'>
                    @csrf
                    <!-- Name Field -->
                    <div>
                        <label for="name" class='block text-sm font-medium text-gray-300 mb-2'>Your Name</label>
                        <input type="text" id="name" name="name" required 
                            class='w-full px-4 py-3 rounded-lg bg-gray-700 text-white focus:ring-2 focus:ring-yellow-500 focus:outline-none'>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class='block text-sm font-medium text-gray-300 mb-2'>Your Email</label>
                        <input type="email" id="email" name="email" required 
                            class='w-full px-4 py-3 rounded-lg bg-gray-700 text-white focus:ring-2 focus:ring-yellow-500 focus:outline-none'>
                    </div>

                    <!-- Subject Field -->
                    <div>
                        <label for="subject" class='block text-sm font-medium text-gray-300 mb-2'>Subject</label>
                        <input type="text" id="subject" name="subject" required 
                            class='w-full px-4 py-3 rounded-lg bg-gray-700 text-white focus:ring-2 focus:ring-yellow-500 focus:outline-none'>
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class='block text-sm font-medium text-gray-300 mb-2'>Your Message</label>
                        <textarea id="message" name="message" rows="5" required 
                            class='w-full px-4 py-3 rounded-lg bg-gray-700 text-white focus:ring-2 focus:ring-yellow-500 focus:outline-none'></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class='text-center'>
                        <button type="submit" 
                            class='py-3 px-6 rounded-lg bg-yellow-500 text-white font-semibold hover:bg-yellow-600 focus:ring-2 focus:ring-yellow-500 focus:outline-none'>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection