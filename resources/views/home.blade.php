@extends('layouts.main')

@section('container')
  <div class="hero  ">
    <div class="hero-content mx-20 flex-col lg:flex-row">
      <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" class="max-w-sm rounded-lg shadow-2xl" />
      <div>
        <h1 class="text-5xl font-bold">Welcome To My Blog</h1>
        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </div>
  <div class=" lg:flex-row mx-20 text-white py-12">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8">
            <div class="text-4xl font-bold mb-4 lg:mb-0">
                7+ years experience<br />working
            </div>
            <div>
                <h3 class="text-green-500 font-bold flex items-center">
                    <span class="border-t-4 border-green-500 w-12 mr-2"></span>
                    Services
                </h3>
                <p class="mt-2 text-gray-400">
                    Discover the best services I offer, designed to ensure the success of your project.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Card 1 -->
            <div class="p-6 rounded-lg text-center flex-1">
                <div class="flex justify-center mb-4">
                    <!-- Example icon, replace with actual icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h18v18H3z" /></svg>
                </div>
                <h4 class="text-xl font-bold mb-2">Product design</h4>
                <p class="text-gray-400 mb-4">
                    I offer innovative and attention-grabbing product design services. From initial ideation to implementation.
                </p>
                <div class="border-t-2 border-green-500 mt-4"></div>
            </div>

            <!-- Card 2 -->
            <div class="p-6 rounded-lg text-center flex-1">
                <div class="flex justify-center mb-4">
                    <!-- Example icon, replace with actual icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h18v18H3z" /></svg>
                </div>
                <h4 class="text-xl font-bold mb-2">Frontend develop</h4>
                <p class="text-gray-400 mb-4">
                    Specialize in responsive and interactive front-end development. With a deep understanding of HTML, CSS, and JS.
                </p>
                <div class="border-t-2 border-green-500 mt-4"></div>
            </div>

            <!-- Card 3 -->
            <div class="p-6 rounded-lg text-center flex-1">
                <div class="flex justify-center mb-4">
                    <!-- Example icon, replace with actual icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h18v18H3z" /></svg>
                </div>
                <h4 class="text-xl font-bold mb-2">Brand strategy</h4>
                <p class="text-gray-400 mb-4">
                    I help design strong and captivating brand strategies. Through thorough research and market analysis.
                </p>
                <div class="border-t-2 border-green-500 mt-4"></div>
            </div>
        </div>
    </div>
</div>
<div class="text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <!-- Header Section -->
        <div class="mb-8">
            <h3 class="text-green-500 font-bold flex items-center justify-center mb-2">
                <span class="border-t-4 border-green-500 w-12 mr-2"></span>
                Testimonials
            </h3>
            <h2 class="text-4xl font-bold">My happy clients</h2>
        </div>

        <!-- Testimonial Content -->
        <div class="max-w-3xl mx-auto">
            <p class="text-gray-400 mb-8">
                "Wow is all I can say! Alifreza did an absolute phenomenal job from start to finish. He created exactly what I wanted and exceeded my expectations. Highly recommend Alifreza!"
            </p>
            <div class="flex items-center justify-center mb-8">
                <img class="w-12 h-12 rounded-full mr-4" src="https://via.placeholder.com/48" alt="Monalisa Nona">
                <div>
                    <p class="font-bold">Monalisa Nona</p>
                    <p class="text-gray-400">Project Manager, <span class="text-white">Ruber</span></p>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="flex justify-between items-center max-w-xs mx-auto">
            <button class="text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <div class="flex space-x-2">
                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                <span class="w-2 h-2 bg-gray-600 rounded-full"></span>
                <span class="w-2 h-2 bg-gray-600 rounded-full"></span>
            </div>
            <button class="text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>
    </div>
</div>



@endsection
