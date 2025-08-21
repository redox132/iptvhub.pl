@extends('layouts.app')

@section('title', 'Tutorial')

@section('content')
<div class="relative isolate py-16 sm:py-24 bg-gray-50 dark:bg-neutral-950">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                How IPTVGEAT Works
            </h1>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                Getting started with IPTVGEAT is simple. Follow these steps to enjoy seamless access to hundreds of live TV channels, movies, and on-demand content.  
            </p>
        </div>

        <!-- Steps -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Step 1 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('images/signup.png') }}" alt="Sign Up" class="w-20 h-20">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">1. Sign Up</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-center">
                    Create your IPTVGEAT account by choosing a subscription plan that best fits your needs. Registration takes less than a minute.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('images/setup.png') }}" alt="Setup" class="w-20 h-20">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">2. Get Your Setup</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-center">
                    Receive your login details and installation guide by email. IPTVGEAT works on Smart TVs, mobile devices, PCs, and streaming boxes.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('images/install.png') }}" alt="Install App" class="w-20 h-20">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">3. Install App</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-center">
                    Download our recommended IPTV player or use your preferred app. Enter your credentials and get ready to stream.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('images/channels.png') }}" alt="Channels" class="w-20 h-20">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">4. Explore Channels</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-center">
                    Access a huge library of live TV, movies, and shows. Browse by category, region, or your favorites with ease.
                </p>
            </div>

            <!-- Step 5 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('images/support.png') }}" alt="Support" class="w-20 h-20">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">5. Get Support</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-center">
                    Need help? Our support team is available 24/7 to guide you with setup, troubleshooting, or plan upgrades.
                </p>
            </div>

            <!-- Step 6 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('images/enjoy.png') }}" alt="Enjoy" class="w-20 h-20">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">6. Enjoy Streaming</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-center">
                    Sit back, relax, and enjoy endless entertainment with IPTVGEAT — anytime, anywhere, on any device.
                </p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-20">
            <a href="{{ url('/pricing') }}" 
               class="inline-flex items-center rounded-xl bg-indigo-600 px-6 py-3 text-lg font-semibold text-white shadow-md hover:bg-indigo-700 transition">
                Start Your Subscription →
            </a>
        </div>
    </div>
</div>
@endsection
