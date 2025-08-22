@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- hero --}}
     <div id="hero" class="relative isolate flex min-h-screen items-center justify-center px-4 sm:px-6 lg:px-8 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/image_1.png') }}');">
        <div class="absolute inset-0 -z-10 bg-black/60"></div>
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72rem]">
            </div>
        </div>
        <div class="mx-auto max-w-4xl text-center py-12 sm:py-16 lg:py-24 relative z-10">
            <div class="mb-6 flex justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm/6 text-white ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Discover our premium IPTV service. <a href="#" class="font-semibold text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Explore now <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <h1 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-5xl lg:text-6xl">
                IPTV Hub: The Best Paid IPTV Service Provider
            </h1>
            <p class="mt-6 text-lg font-medium text-pretty text-white sm:text-xl/8">
                Over 18,000 live TV channels and 80,000 movies & TV shows (VOD) on your TV, computer, tablet, or smartphone.
            </p>
            <div class="mt-8 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md bg-[#04aa6d] px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-[#018051] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                <a href="#" class="text-sm/6 font-semibold text-white px-3 py-1 rounded-md">Learn more <span aria-hidden="true">→</span></a>
            </div>
        </div>
        <div aria-hidden="true" class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72rem]">
            </div>
        </div>
    </div>
    {{-- end of hero --}}

    {{-- pricing --}}
    <div id="pricing" class="relative isolate bg-[#ededed] px-4 py-16 sm:py-20 lg:px-6">
        <div aria-hidden="true" class="absolute inset-x-0 -top-2 -z-10 transform-gpu overflow-hidden px-24 blur-3xl">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="mx-auto aspect-1155/678 w-200 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"></div>
        </div>
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-sm/6 font-semibold text-indigo-600">Our Packages</h2>
            <p class="mt-1 text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Choose the
                right plan for you</p>
        </div>
        <p class="mx-auto mt-4 max-w-xl text-center text-base font-medium text-pretty text-gray-600 sm:text-lg/7">
            Well, we assure you that we are providing the best quality service comparing other service providers.
        </p>
        <div
            class="mx-auto mt-12 grid max-w-md grid-cols-1 items-center gap-y-4 sm:mt-16 sm:gap-y-0 lg:max-w-7xl lg:grid-cols-4">
            <div
                class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-6 sm:p-8 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-2xl">
                <h3 id="tier-monthly" class="text-sm/6 font-semibold text-indigo-600">1 Month</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">$15</span>
                    <span class="text-sm text-gray-500">/month</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-600">Flexible plan for short-term needs.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-600 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 18,000 Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 80,000 Movies & TV-series
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Premium HD & SD Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24/7 Dedicated Support
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Supports All Kind Of Device
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Electronic TV Guide (EPG)
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        AntiFreeze Tech. & 99.99% Uptime
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-monthly"
                    class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-8">Get
                    started today</a>
            </div>
            <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-6 sm:p-8 lg:mx-0">
                <h3 id="tier-three-month" class="text-sm/6 font-semibold text-indigo-600">3 Months</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">$10</span>
                    <span class="text-sm text-gray-500">/month</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-600">Save with a quarterly plan.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-600 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 18,000 Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 80,000 Movies & TV-series
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Premium HD & SD Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24/7 Dedicated Support
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Supports All Kind Of Device
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Electronic TV Guide (EPG)
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        AntiFreeze Tech. & 99.99% Uptime
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-three-month"
                    class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-8">Get
                    started today</a>
            </div>
            <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-6 sm:p-8 lg:mx-0">
                <h3 id="tier-six-month" class="text-sm/6 font-semibold text-indigo-600">6 Months</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">$8.33</span>
                    <span class="text-sm text-gray-500">/month</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-600">Save with a semi-annual plan.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-600 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 18,000 Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 80,000 Movies & TV-series
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Premium HD & SD Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24/7 Dedicated Support
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Supports All Kind Of Device
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Electronic TV Guide (EPG)
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        AntiFreeze Tech. & 99.99% Uptime
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-six-month"
                    class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-8">Get
                    started today</a>
            </div>
            <div class="relative rounded-2xl bg-gray-900 p-6 shadow-2xl ring-1 ring-gray-900/10 sm:p-8">
                <h3 id="tier-yearly" class="text-sm/6 font-semibold text-indigo-400">12 Months</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-white">$6.67</span>
                    <span class="text-sm text-gray-400">/month</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-300">Save with an annual plan.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-300 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 18,000 Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Over 80,000 Movies & TV-series
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Premium HD & SD Channels
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24/7 Dedicated Support
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Supports All Kind Of Device
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Electronic TV Guide (EPG)
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        AntiFreeze Tech. & 99.99% Uptime
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-yearly"
                    class="mt-6 block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-8">Get
                    started today</a>
            </div>
        </div>
    </div>
    {{-- end of pricing --}}

    {{-- services --}}
    <div id="services" class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base/7 font-semibold text-indigo-600">Our Packages</h2>
                <p class="sm:mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                    The best IPTV service provider according to Binge!
                </p>
                <p class="mt-4 sm:mt-6 text-md leading-8 text-gray-700 lg:text-md">
                    We are the leading IPTV subscription service provider offering unbeatable price, service quality,
                    and customer support. Enjoy over 18K TV channels, including 2000+ premium sports channels, all
                    streamed in flawless HD quality.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            No More Expensive Cable Bills
                        </dt>
                        <dd class="sm:text-base mt-4 text-sm/6 text-gray-600">
                            Say goodbye to high cable bills! Our IPTV service gives you unlimited access to top channels
                            at a fraction of the cost, with reliable 24/7 streaming and zero hidden fees.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Solid IPTV Service
                        </dt>
                        <dd class="sm:text-base mt-4 text-sm/6 text-gray-600">
                            Experience uninterrupted streaming with our solid IPTV service. No buffering, no
                            freezing—just high-quality entertainment whenever you want, on any device.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Premium Channels
                        </dt>
                        <dd class="sm:text-base mt-4 text-sm/6 text-gray-600">
                            Get access to the most sought-after premium channels including sports, movies, and
                            entertainment. Our IPTV lineup is curated to offer maximum variety for every viewer.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            VOD Movies & TV-series
                        </dt>
                        <dd class="sm:text-base mt-4 text-sm/6 text-gray-600">
                            Enjoy nearly 80,000 movies and all the latest TV-series with on-demand access. Our VOD
                            library is constantly updated, giving you endless entertainment at your fingertips.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    {{-- end of services --}}

    {{--  features --}}
    <div id="features" class="bg-[#ededed]">
        <section id="features" class="relative isolate px-6 py-16 sm:py-20 lg:px-8">
            <!-- Background Effect -->
            <div aria-hidden="true" class="absolute inset-x-0 -top-2 -z-10 transform-gpu overflow-hidden px-24 blur-3xl">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="mx-auto aspect-[1155/678] w-[200%] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30">
                </div>
            </div>

            <!-- Centered Title & Subtitle -->
            <div class="relative mx-auto max-w-3xl text-center">
                <span class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">Our Features</span>
                <h2 class="mt-2 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-gray-900">
                    IPTV Hub Premium IPTV provider
                </h2>
                <p class="mt-4 text-base sm:text-lg md:text-xl text-gray-600 max-w-xl mx-auto">
                    Premium IPTV service with over 18,000 channels on a private server using +10Gbps, delivered via m3u
                    list over the Internet, surpassing traditional satellite or cable formats.
                </p>
            </div>

            <!-- Feature Cards -->
            <div
                class="mx-auto mt-12 grid max-w-md grid-cols-1 gap-y-6 sm:max-w-2xl sm:grid-cols-2 sm:gap-x-6 lg:max-w-4xl lg:grid-cols-3 lg:gap-x-6">
                <!-- Card 1 -->
                <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:p-8 text-center">
                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2"></path>
                            <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9"></path>
                            <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12"></path>
                            <line x1="17" y1="17" x2="17" y2="17.01"></line>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-sm font-semibold text-indigo-600">All Devices</h3>
                    <p class="mt-4 text-sm text-gray-600">Your Favorite Shows and Channels on Any Device, From Any
                        Location</p>
                </div>

                <!-- Card 2 -->
                <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:p-8 text-center">
                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-sm font-semibold text-indigo-600">AntiFreeze Technology</h3>
                    <p class="mt-4 text-sm text-gray-600">Our services use the latest H264 technology, offering the
                        best compression and quality.</p>
                </div>

                <!-- Card 3 -->
                <div class="rounded-2xl bg-gray-900 p-6 shadow-2xl ring-1 ring-gray-900/10 sm:p-8 text-center">
                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                            <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                            <polyline points="12 8 7 3 3 7 8 12"></polyline>
                            <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                            <polyline points="16 12 21 17 17 21 12 16"></polyline>
                            <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-sm font-semibold text-indigo-400">99.99% Uptime</h3>
                    <p class="mt-4 text-sm text-gray-300">We always try to give a better quality IPTV subscription
                        service to our users.</p>
                </div>
            </div>
        </section>
    </div>
    {{-- end of features --}}



    <!-- testimonials -->
    <div class="relative isolate overflow-hidden bg-gray-50 dark:bg-neutral-950">
        <!-- Top Gradient Background -->
        <div aria-hidden="true"
            class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div
                class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-pink-300 to-indigo-400 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72rem]">
            </div>
        </div>

        <div class="relative max-w-[85rem] px-4 py-20 sm:px-6 lg:px-8 lg:py-32 mx-auto">
            <!-- Title -->
            <div class="max-w-2xl w-3/4 lg:w-1/2 mb-10 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-900 dark:text-white">
                    Loved by businesses and individuals across the globe
                </h2>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-white shadow-md rounded-2xl dark:bg-neutral-900">
                        <div class="flex-auto p-6">
                            <p class="text-base italic md:text-lg text-gray-700 dark:text-neutral-200">
                                " IPTV Hub has transformed our entertainment experience. With over 18,000 channels and
                                seamless streaming, it's a game-changer for our family movie nights! "
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-b-2xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm sm:text-base font-semibold text-gray-900 dark:text-neutral-200">
                                        Michael Chen</p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">Home Entertainment
                                        Enthusiast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-white shadow-md rounded-2xl dark:bg-neutral-900">
                        <div class="flex-auto p-6">
                            <p class="text-base italic md:text-lg text-gray-700 dark:text-neutral-200">
                                " The AntiFreeze technology is incredible! No buffering, even during peak hours. The
                                24/7 support team resolved my setup queries in minutes. "
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-b-2xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm sm:text-base font-semibold text-gray-900 dark:text-neutral-200">
                                        Sarah Johnson</p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">Small Business Owner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-white shadow-md rounded-2xl dark:bg-neutral-900">
                        <div class="flex-auto p-6">
                            <p class="text-base italic md:text-lg text-gray-700 dark:text-neutral-200">
                                " With 80,000+ movies and series, I never run out of content. The EPG makes navigation a
                                breeze, and it works flawlessly on all my devices. "
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-b-2xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm sm:text-base font-semibold text-gray-900 dark:text-neutral-200">
                                        Emma Rodriguez</p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">Content Creator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Grid -->

            <!-- Stats Grid -->
            <div class="mt-24 grid gap-12 sm:gap-16 lg:grid-cols-3 lg:gap-12">
                <!-- Stats -->
                <div>
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Channel Count</h4>
                    <p class="mt-3 text-4xl sm:text-6xl font-bold text-emerald-500">18,000+</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">channels available</p>
                </div>

                <!-- Stats -->
                <div>
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Uptime</h4>
                    <p class="mt-3 text-4xl sm:text-6xl font-bold text-indigo-500">99.99%</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">reliable streaming</p>
                </div>

                <!-- Stats -->
                <div>
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Customer Satisfaction
                    </h4>
                    <p class="mt-3 text-4xl sm:text-6xl font-bold text-pink-500">92%</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">happy subscribers</p>
                </div>
            </div>
            <!-- End Stats Grid -->
        </div>

        <!-- Bottom Gradient Background -->
        <div aria-hidden="true" class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl">
            <div
                class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 bg-gradient-to-tr from-pink-300 to-indigo-400 opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72rem]">
            </div>
        </div>
    </div>
    <!-- end Testimonials -->

    {{-- faqs --}}
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16">
                <h2 class="text-4xl font-manrope text-center font-bold text-gray-900 leading-[3.25rem]">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="accordion-group space-y-6">
                <!-- Item 1 -->
                <div class="accordion border border-gray-300 p-4 rounded-xl transition duration-300">
                    <button
                        class="accordion-toggle flex items-center justify-between w-full text-lg text-gray-900 hover:text-indigo-600 font-medium">
                        <span>How do I set up IPTV Gear on my device?</span>
                        <svg class="accordion-icon w-6 h-6 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="mt-3 text-base text-gray-700">
                            Download the IPTV Gear app from our website or your device's app store, enter your subscription
                            credentials, and follow the on-screen instructions to access over 18,000 channels and 80,000 VOD
                            titles.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion border border-gray-300 p-4 rounded-xl transition duration-300">
                    <button
                        class="accordion-toggle flex items-center justify-between w-full text-lg text-gray-900 hover:text-indigo-600 font-medium">
                        <span>What devices are compatible with IPTV Gear?</span>
                        <svg class="accordion-icon w-6 h-6 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="mt-3 text-base text-gray-700">
                            IPTV Gear works on TVs, computers, tablets, and smartphones, including Smart TVs, Android, iOS,
                            Firestick, and more, using our app or an m3u playlist with compatible players.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion border border-gray-300 p-4 rounded-xl transition duration-300">
                    <button
                        class="accordion-toggle flex items-center justify-between w-full text-lg text-gray-900 hover:text-indigo-600 font-medium">
                        <span>How can I contact IPTV Gear support?</span>
                        <svg class="accordion-icon w-6 h-6 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="mt-3 text-base text-gray-700">
                            Reach our 24/7 support team via live chat, email, or our dedicated hotline. Visit the "Support"
                            page on our website for contact details and quick assistance.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion border border-gray-300 p-4 rounded-xl transition duration-300">
                    <button
                        class="accordion-toggle flex items-center justify-between w-full text-lg text-gray-900 hover:text-indigo-600 font-medium">
                        <span>What is included in the IPTV Gear subscription?</span>
                        <svg class="accordion-icon w-6 h-6 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="mt-3 text-base text-gray-700">
                            Your subscription includes access to over 18,000 live TV channels, 80,000+ movies and TV shows
                            (VOD), premium sports channels, and an EPG, all streamable with AntiFreeze technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- end of faqs --}}

@endsection
