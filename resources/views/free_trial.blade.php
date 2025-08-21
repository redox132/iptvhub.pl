@extends('layouts.app')

@section('title', 'Free Trial')

@section('content')
<div class="relative isolate py-16 sm:py-24">
    <div class="max-w-6xl mt-20 mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 items-center">

            <!-- Left Content (60%) -->
            <div class="lg:col-span-7 text-left">
                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    Free Trial Unavailable
                </h1>

                <!-- Message -->
                <p class="text-md text-gray-700 dark:text-gray-300 leading-relaxed mb-6 sm:text-xl">
                    We regret to inform you that due to overwhelming demand, we currently do not have trial slots available. 
                    We apologize for any inconvenience this may cause. Rest assured, our team is working diligently to expand 
                    our capacity and accommodate more users in the future.
                </p>

                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    Please explore our <span class="font-semibold text-indigo-600 dark:text-indigo-400">premium IPTV services</span> 
                    to access a vast array of entertainment options. Stay tuned for updates and thank you for considering 
                    <span class="font-bold">IPTVGEAT</span>. Your satisfaction is our priority, and we look forward to providing you 
                    with an exceptional IPTV experience.
                </p>

                <!-- Back Home Button -->
                <div>
                    <a href="{{ url('/') }}" 
                       class="inline-flex items-center rounded-xl bg-indigo-600 px-5 py-3 text-base font-semibold text-white shadow-md hover:bg-indigo-700 transition">
                        ← Back Home
                    </a>
                </div>
            </div>

            <!-- Right Image (40%) -->
            <div class="lg:col-span-5 hidden lg:flex justify-center lg:justify-end">
                <img 
                    src="{{ asset('images/2bf03992-150c-43b6-bacc-676e3b4828b3.jpg') }}" 
                    alt="No trial slots illustration" 
                    class="w-full max-w-sm object-cover rounded-2xl"
                >
            </div>

        </div>
    </div>
</div>
@endsection
