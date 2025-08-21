<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="{{ asset('images/logo.png') }}"
                            alt="" class="h-8 w-auto" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" command="show-modal" commandfor="mobile-menu"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Product</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Features</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Marketplace</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Company</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <el-dialog>
                <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                    <div tabindex="0" class="fixed inset-0 focus:outline-none">
                        <el-dialog-panel
                            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                                        alt="" class="h-8 w-auto" />
                                </a>
                                <button type="button" command="close" commandfor="mobile-menu"
                                    class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                    <span class="sr-only">Close menu</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10">
                                    <div class="space-y-2 py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                            in</a>
                                    </div>
                                </div>
                            </div>
                        </el-dialog-panel>
                    </div>
                </dialog>
            </el-dialog>
        </header>

        <div class="relative isolate flex min-h-screen items-center justify-center px-6 lg:px-8">
            <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                </div>
            </div>
            <div class="mx-auto max-w-2xl text-center py-16 sm:py-24 lg:py-32">
                <div class="mb-8 flex justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Announcing our next round of funding. <a href="#"
                            class="font-semibold text-indigo-600"><span aria-hidden="true"
                                class="absolute inset-0"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <h1 class="text-xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Data to enrich
                    your online business</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Anim aute id magna aliqua ad
                    ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-[#04AA6D] px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
            <div aria-hidden="true" class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
                </div>
            </div>
        </div>
    </div>


    <div class="relative isolate bg-[#ededed] px-4 py-16 sm:py-20 lg:px-6">
        <div aria-hidden="true" class="absolute inset-x-0 -top-2 -z-10 transform-gpu overflow-hidden px-24 blur-3xl">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="mx-auto aspect-1155/678 w-200 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"></div>
        </div>
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-sm/6 font-semibold text-indigo-600">Pricing</h2>
            <p class="mt-1 text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Choose the
                right plan for you</p>
        </div>
        <p class="mx-auto mt-4 max-w-xl text-center text-base font-medium text-pretty text-gray-600 sm:text-lg/7">
            Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer
            loyalty, and driving sales.</p>
        <div
            class="mx-auto mt-12 grid max-w-md grid-cols-1 items-center gap-y-4 sm:mt-16 sm:gap-y-0 lg:max-w-7xl lg:grid-cols-4">
            <div
                class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-6 sm:p-8 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-2xl">
                <h3 id="tier-monthly" class="text-sm/6 font-semibold text-indigo-600">Monthly</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">$29</span>
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
                        25 products
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Up to 10,000 subscribers
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24-hour support response time
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-monthly"
                    class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-8">Get
                    started today</a>
            </div>
            <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-6 sm:p-8 lg:mx-0">
                <h3 id="tier-three-month" class="text-sm/6 font-semibold text-indigo-600">3-Month</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">$82</span>
                    <span class="text-sm text-gray-500">/3 months</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-600">Save 5% with a quarterly plan.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-600 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        25 products
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Up to 10,000 subscribers
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24-hour support response time
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-three-month"
                    class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-8">Get
                    started today</a>
            </div>
            <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-6 sm:p-8 lg:mx-0">
                <h3 id="tier-six-month" class="text-sm/6 font-semibold text-indigo-600">6-Month</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">$156</span>
                    <span class="text-sm text-gray-500">/6 months</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-600">Save 10% with a semi-annual plan.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-600 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        25 products
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Up to 10,000 subscribers
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-600">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24-hour support response time
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-six-month"
                    class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-8">Get
                    started today</a>
            </div>
            <div class="relative rounded-2xl bg-gray-900 p-6 shadow-2xl ring-1 ring-gray-900/10 sm:p-8">
                <h3 id="tier-yearly" class="text-sm/6 font-semibold text-indigo-400">Yearly</h3>
                <p class="mt-3 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-white">$295</span>
                    <span class="text-sm text-gray-400">/year</span>
                </p>
                <p class="mt-4 text-sm/6 text-gray-300">Save 15% with an annual plan.</p>
                <ul role="list" class="mt-6 space-y-2 text-xs/5 text-gray-300 sm:mt-8">
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Unlimited products
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Unlimited subscribers
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Dedicated support representative
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Marketing automations
                    </li>
                    <li class="flex gap-x-2">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-5 w-4 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Custom integrations
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-yearly"
                    class="mt-6 block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-8">Get
                    started today</a>
            </div>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                <p
                    class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">
                    Everything you need to deploy your app</p>
                <p class="mt-6 text-lg/8 text-gray-700">Quis tellus eget adipiscing convallis sit sit eget aliquet
                    quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.
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
                            Push to deploy
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">Morbi viverra dui mi arcu sed. Tellus semper
                            adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
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
                            SSL certificates
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">Sit quis amet rutrum tellus ullamcorper ultricies
                            libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
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
                            Simple queues
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">Quisque est vel vulputate cursus. Risus proin diam
                            nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
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
                            Advanced security
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">Arcu egestas dolor vel iaculis in ipsum mauris.
                            Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>



    <div class="bg-[#ededed]">
        <section id="features" class="relative isolate px-6 py-16 sm:py-20 lg:px-8">
            <div aria-hidden="true"
                class="absolute inset-x-0 -top-2 -z-10 transform-gpu overflow-hidden px-24 blur-3xl">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="mx-auto aspect-1155/678 w-200 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"></div>
            </div>
            <div class="relative mx-auto max-w-3xl text-center">
                <span class="text-sm/6 font-semibold text-indigo-600 uppercase tracking-wider">Why choose us</span>
                <h2 class="mt-1 text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Build a
                    Website That Your Customers Love</h2>
                <p class="mt-4 max-w-xl text-base font-medium text-pretty text-gray-600 sm:text-lg/7">Our templates
                    allow for maximum customization. No technical skills required – our intuitive design tools let you
                    get the job done easily.</p>
            </div>
            <div
                class="mx-auto mt-12 grid max-w-md grid-cols-1 gap-y-4 sm:mt-16 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-3 lg:gap-x-6">
                <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:p-8">
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
                    <h3 class="mt-6 text-sm/6 font-semibold text-indigo-600">Customizable</h3>
                    <p class="mt-4 text-xs/5 text-gray-600">Tailor your landing page's look and feel, from the color
                        scheme to the font size, to the design of the page.</p>
                </div>
                <div class="rounded-2xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:p-8">
                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-sm/6 font-semibold text-indigo-600">Fast Performance</h3>
                    <p class="mt-4 text-xs/5 text-gray-600">We build our templates for speed in mind, for super-fast
                        load times so your customers never waver.</p>
                </div>
                <div class="rounded-2xl bg-gray-900 p-6 shadow-2xl ring-1 ring-gray-900/10 sm:p-8">
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
                    <h3 class="mt-6 text-sm/6 font-semibold text-indigo-400">Fully Featured</h3>
                    <p class="mt-4 text-xs/5 text-gray-300">Everything you need to succeed and launch your landing
                        page, right out of the box. No need to install anything else.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Testimonials -->
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
                                " With Preline, we're able to easily track our performance in full detail. It's become
                                an essential tool for us to grow and engage with our audience. "
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-b-2xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm sm:text-base font-semibold text-gray-900 dark:text-neutral-200">
                                        Josh Tyson</p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">Product Manager | Capsule
                                    </p>
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
                                " In September, I will be using this theme for 2 years. I went through multiple updates
                                and changes and I'm very glad to see the consistency and effort made by the team. "
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-b-2xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm sm:text-base font-semibold text-gray-900 dark:text-neutral-200">
                                        Luisa</p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">Senior Director of
                                        Operations | Fitbit</p>
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
                                " Refreshing and thought-provoking design that changed how I approach building websites.
                                Great typography, modern clean layouts, and elegant use of color. "
                            </p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-b-2xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <img class="size-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                    alt="Avatar">
                                <div>
                                    <p class="text-sm sm:text-base font-semibold text-gray-900 dark:text-neutral-200">
                                        Alisa Williams</p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">Entrepreneur | Happy
                                        Customer</p>
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
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Accuracy rate</h4>
                    <p class="mt-3 text-4xl sm:text-6xl font-bold text-emerald-500">99.95%</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">in fulfilling orders</p>
                </div>

                <!-- Stats -->
                <div>
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Startup businesses</h4>
                    <p class="mt-3 text-4xl sm:text-6xl font-bold text-indigo-500">2,000+</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">partner with Preline</p>
                </div>

                <!-- Stats -->
                <div>
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Happy customers</h4>
                    <p class="mt-3 text-4xl sm:text-6xl font-bold text-pink-500">85%</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">this year alone</p>
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
    <!-- End Testimonials -->


    <footer class="w-full py-14">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <a href="https://pagedone.io/" class="flex justify-center ">
                    <svg class="w-40 h-8" viewBox="0 0 164 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47 24.7231V7H54.4171C54.5916 7 54.816 7.00821 55.0903 7.02462C55.3645 7.03282 55.618 7.05744 55.8507 7.09846C56.8895 7.25436 57.7455 7.59487 58.4186 8.12C59.1001 8.64513 59.6029 9.30974 59.927 10.1138C60.2594 10.9097 60.4256 11.7959 60.4256 12.7723C60.4256 13.7405 60.2594 14.6267 59.927 15.4308C59.5945 16.2267 59.0876 16.8872 58.4061 17.4123C57.733 17.9374 56.8812 18.2779 55.8507 18.4338C55.618 18.4667 55.3604 18.4913 55.0778 18.5077C54.8035 18.5241 54.5833 18.5323 54.4171 18.5323H50.0042V24.7231H47ZM50.0042 15.7631H54.2925C54.4587 15.7631 54.6457 15.7549 54.8534 15.7385C55.0612 15.7221 55.2523 15.6892 55.4268 15.64C55.9255 15.5169 56.3161 15.2995 56.5986 14.9877C56.8895 14.6759 57.0931 14.3231 57.2094 13.9292C57.3341 13.5354 57.3964 13.1497 57.3964 12.7723C57.3964 12.3949 57.3341 12.0092 57.2094 11.6154C57.0931 11.2133 56.8895 10.8564 56.5986 10.5446C56.3161 10.2328 55.9255 10.0154 55.4268 9.89231C55.2523 9.84308 55.0612 9.81436 54.8534 9.80615C54.6457 9.78974 54.4587 9.78154 54.2925 9.78154H50.0042V15.7631Z"
                            fill="#111827"></path>
                        <path
                            d="M66.0975 25.0923C65.1252 25.0923 64.3024 24.9118 63.6293 24.5508C62.9561 24.1815 62.445 23.6933 62.096 23.0862C61.7553 22.479 61.5849 21.8103 61.5849 21.08C61.5849 20.44 61.6929 19.8656 61.909 19.3569C62.1251 18.84 62.4575 18.3969 62.9063 18.0277C63.355 17.6503 63.9368 17.3426 64.6515 17.1046C65.1917 16.9323 65.8233 16.7764 66.5463 16.6369C67.2776 16.4974 68.0671 16.3703 68.9148 16.2554C69.7707 16.1323 70.6641 16.001 71.5949 15.8615L70.5228 16.4646C70.5311 15.5456 70.3234 14.8687 69.8995 14.4338C69.4757 13.999 68.761 13.7815 67.7554 13.7815C67.1488 13.7815 66.5629 13.921 65.9978 14.2C65.4327 14.479 65.0379 14.959 64.8135 15.64L62.0711 14.7908C62.4035 13.6667 63.0351 12.7641 63.9659 12.0831C64.9049 11.4021 66.1681 11.0615 67.7554 11.0615C68.9522 11.0615 70.0034 11.2544 70.9093 11.64C71.8234 12.0256 72.5007 12.6574 72.9412 13.5354C73.1822 14.0031 73.3276 14.4831 73.3775 14.9754C73.4274 15.4595 73.4523 15.9887 73.4523 16.5631V24.7231H70.822V21.8431L71.2583 22.3108C70.6517 23.2708 69.9411 23.9764 69.1267 24.4277C68.3206 24.8708 67.3108 25.0923 66.0975 25.0923ZM66.6959 22.7292C67.3773 22.7292 67.9591 22.6103 68.4411 22.3723C68.9231 22.1344 69.3054 21.8431 69.5879 21.4985C69.8788 21.1538 70.0741 20.8297 70.1738 20.5262C70.3317 20.1487 70.419 19.7179 70.4356 19.2338C70.4605 18.7415 70.473 18.3436 70.473 18.04L71.3954 18.3108C70.4896 18.4503 69.7126 18.5733 69.0643 18.68C68.4161 18.7867 67.8593 18.8892 67.3939 18.9877C66.9286 19.0779 66.5172 19.1805 66.1598 19.2954C65.8108 19.4185 65.5158 19.5621 65.2748 19.7262C65.0338 19.8903 64.8468 20.079 64.7138 20.2923C64.5891 20.5056 64.5268 20.7559 64.5268 21.0431C64.5268 21.3713 64.6099 21.6626 64.7761 21.9169C64.9423 22.1631 65.1833 22.36 65.4991 22.5077C65.8233 22.6554 66.2222 22.7292 66.6959 22.7292Z"
                            fill="#111827"></path>
                        <path
                            d="M82.1078 31C81.3598 31 80.641 30.8851 79.9512 30.6554C79.2698 30.4256 78.6548 30.0933 78.1063 29.6585C77.5578 29.2318 77.109 28.7149 76.76 28.1077L79.5274 26.7538C79.785 27.2379 80.1465 27.5949 80.6119 27.8246C81.0856 28.0626 81.5884 28.1815 82.1203 28.1815C82.7435 28.1815 83.3003 28.0708 83.7907 27.8492C84.281 27.6359 84.6591 27.3159 84.925 26.8892C85.1993 26.4708 85.3281 25.9456 85.3115 25.3138V21.5354H85.6855V11.4308H88.3157V25.3631C88.3157 25.6995 88.2991 26.0195 88.2659 26.3231C88.2409 26.6349 88.1952 26.9385 88.1287 27.2338C87.9293 28.0954 87.547 28.801 86.9819 29.3508C86.4168 29.9087 85.7145 30.3231 84.8752 30.5938C84.0441 30.8646 83.1217 31 82.1078 31ZM81.846 25.0923C80.6077 25.0923 79.5274 24.7846 78.6049 24.1692C77.6825 23.5538 76.9678 22.7169 76.4608 21.6585C75.9539 20.6 75.7004 19.4062 75.7004 18.0769C75.7004 16.7313 75.9539 15.5333 76.4608 14.4831C76.9761 13.4246 77.7032 12.5918 78.6423 11.9846C79.5814 11.3692 80.6867 11.0615 81.9582 11.0615C83.238 11.0615 84.3101 11.3692 85.1744 11.9846C86.047 12.5918 86.7076 13.4246 87.1564 14.4831C87.6052 15.5415 87.8296 16.7395 87.8296 18.0769C87.8296 19.3979 87.6052 20.5918 87.1564 21.6585C86.7076 22.7169 86.0387 23.5538 85.1494 24.1692C84.2602 24.7846 83.1591 25.0923 81.846 25.0923ZM82.3072 22.4338C83.1134 22.4338 83.7616 22.2533 84.2519 21.8923C84.7505 21.5231 85.112 21.0103 85.3364 20.3538C85.5691 19.6974 85.6855 18.9385 85.6855 18.0769C85.6855 17.2072 85.5691 16.4482 85.3364 15.8C85.112 15.1436 84.7588 14.6349 84.2768 14.2738C83.7948 13.9046 83.1715 13.72 82.407 13.72C81.6008 13.72 80.936 13.9169 80.4124 14.3108C79.8889 14.6964 79.5024 15.2215 79.2531 15.8862C79.0038 16.5426 78.8792 17.2728 78.8792 18.0769C78.8792 18.8892 78.9997 19.6277 79.2407 20.2923C79.49 20.9487 79.8681 21.4697 80.375 21.8554C80.882 22.241 81.5261 22.4338 82.3072 22.4338Z"
                            fill="#111827"></path>
                        <path
                            d="M97.6827 25.0923C96.3198 25.0923 95.1231 24.801 94.0926 24.2185C93.0621 23.6359 92.256 22.8277 91.6743 21.7938C91.1008 20.76 90.8141 19.5703 90.8141 18.2246C90.8141 16.7723 91.0967 15.5128 91.6618 14.4462C92.2269 13.3713 93.0122 12.5385 94.0178 11.9477C95.0234 11.3569 96.1869 11.0615 97.5082 11.0615C98.9044 11.0615 100.089 11.3856 101.061 12.0338C102.042 12.6738 102.769 13.5805 103.242 14.7538C103.716 15.9272 103.895 17.3097 103.778 18.9015H100.799V17.8185C100.791 16.3744 100.533 15.32 100.026 14.6554C99.5194 13.9908 98.7216 13.6585 97.6329 13.6585C96.4029 13.6585 95.4888 14.0359 94.8904 14.7908C94.2921 15.5374 93.9929 16.6328 93.9929 18.0769C93.9929 19.4226 94.2921 20.4646 94.8904 21.2031C95.4888 21.9415 96.3614 22.3108 97.5082 22.3108C98.2479 22.3108 98.8836 22.1508 99.4155 21.8308C99.9557 21.5026 100.371 21.0308 100.662 20.4154L103.629 21.3015C103.114 22.4995 102.316 23.4308 101.235 24.0954C100.163 24.76 98.9792 25.0923 97.6827 25.0923ZM93.0455 18.9015V16.6615H102.308V18.9015H93.0455Z"
                            fill="#111827"></path>
                        <path
                            d="M111.708 25.0923C110.47 25.0923 109.39 24.7846 108.467 24.1692C107.545 23.5538 106.83 22.7169 106.323 21.6585C105.816 20.6 105.563 19.4062 105.563 18.0769C105.563 16.7313 105.816 15.5333 106.323 14.4831C106.838 13.4246 107.565 12.5918 108.505 11.9846C109.444 11.3692 110.549 11.0615 111.82 11.0615C113.1 11.0615 114.172 11.3692 115.037 11.9846C115.909 12.5918 116.57 13.4246 117.019 14.4831C117.467 15.5415 117.692 16.7395 117.692 18.0769C117.692 19.3979 117.467 20.5918 117.019 21.6585C116.57 22.7169 115.901 23.5538 115.012 24.1692C114.122 24.7846 113.021 25.0923 111.708 25.0923ZM112.169 22.4338C112.976 22.4338 113.624 22.2533 114.114 21.8923C114.613 21.5231 114.974 21.0103 115.199 20.3538C115.431 19.6974 115.548 18.9385 115.548 18.0769C115.548 17.2072 115.431 16.4482 115.199 15.8C114.974 15.1436 114.621 14.6349 114.139 14.2738C113.657 13.9046 113.034 13.72 112.269 13.72C111.463 13.72 110.798 13.9169 110.275 14.3108C109.751 14.6964 109.365 15.2215 109.115 15.8862C108.866 16.5426 108.741 17.2728 108.741 18.0769C108.741 18.8892 108.862 19.6277 109.103 20.2923C109.352 20.9487 109.73 21.4697 110.237 21.8554C110.744 22.241 111.388 22.4338 112.169 22.4338ZM115.548 24.7231V15.3938H115.174V7H118.203V24.7231H115.548Z"
                            fill="#111827"></path>
                        <path
                            d="M127.395 25.0923C126.049 25.0923 124.873 24.7928 123.867 24.1938C122.861 23.5949 122.08 22.7703 121.523 21.72C120.975 20.6615 120.701 19.4472 120.701 18.0769C120.701 16.6821 120.983 15.4595 121.548 14.4092C122.113 13.359 122.899 12.5385 123.904 11.9477C124.91 11.3569 126.073 11.0615 127.395 11.0615C128.749 11.0615 129.93 11.361 130.935 11.96C131.941 12.559 132.722 13.3877 133.279 14.4462C133.835 15.4964 134.114 16.7067 134.114 18.0769C134.114 19.4554 133.831 20.6738 133.266 21.7323C132.709 22.7826 131.928 23.6072 130.923 24.2062C129.917 24.7969 128.741 25.0923 127.395 25.0923ZM127.395 22.3108C128.592 22.3108 129.481 21.9169 130.062 21.1292C130.644 20.3415 130.935 19.3241 130.935 18.0769C130.935 16.7887 130.64 15.7631 130.05 15C129.46 14.2287 128.575 13.8431 127.395 13.8431C126.589 13.8431 125.924 14.0236 125.4 14.3846C124.885 14.7374 124.503 15.2338 124.253 15.8738C124.004 16.5056 123.879 17.24 123.879 18.0769C123.879 19.3651 124.174 20.3949 124.765 21.1662C125.363 21.9292 126.24 22.3108 127.395 22.3108Z"
                            fill="#111827"></path>
                        <path
                            d="M145.923 24.7231V18.3231C145.923 17.9046 145.894 17.441 145.836 16.9323C145.778 16.4236 145.64 15.9354 145.424 15.4677C145.217 14.9918 144.901 14.6021 144.477 14.2985C144.061 13.9949 143.496 13.8431 142.782 13.8431C142.399 13.8431 142.021 13.9046 141.647 14.0277C141.273 14.1508 140.933 14.3641 140.625 14.6677C140.326 14.9631 140.085 15.3733 139.902 15.8985C139.719 16.4154 139.628 17.08 139.628 17.8923L137.845 17.1415C137.845 16.0092 138.065 14.9836 138.506 14.0646C138.955 13.1456 139.611 12.4154 140.475 11.8738C141.34 11.3241 142.403 11.0492 143.667 11.0492C144.664 11.0492 145.487 11.2133 146.135 11.5415C146.783 11.8697 147.298 12.2882 147.681 12.7969C148.063 13.3056 148.345 13.8472 148.528 14.4215C148.711 14.9959 148.827 15.5415 148.877 16.0585C148.936 16.5672 148.965 16.9815 148.965 17.3015V24.7231H145.923ZM136.586 24.7231V11.4308H139.266V15.5538H139.628V24.7231H136.586Z"
                            fill="#111827"></path>
                        <path
                            d="M157.87 25.0923C156.507 25.0923 155.31 24.801 154.28 24.2185C153.249 23.6359 152.443 22.8277 151.861 21.7938C151.288 20.76 151.001 19.5703 151.001 18.2246C151.001 16.7723 151.284 15.5128 151.849 14.4462C152.414 13.3713 153.199 12.5385 154.205 11.9477C155.21 11.3569 156.374 11.0615 157.695 11.0615C159.091 11.0615 160.276 11.3856 161.248 12.0338C162.229 12.6738 162.956 13.5805 163.43 14.7538C163.903 15.9272 164.082 17.3097 163.966 18.9015H160.986V17.8185C160.978 16.3744 160.72 15.32 160.213 14.6554C159.706 13.9908 158.909 13.6585 157.82 13.6585C156.59 13.6585 155.676 14.0359 155.078 14.7908C154.479 15.5374 154.18 16.6328 154.18 18.0769C154.18 19.4226 154.479 20.4646 155.078 21.2031C155.676 21.9415 156.548 22.3108 157.695 22.3108C158.435 22.3108 159.071 22.1508 159.603 21.8308C160.143 21.5026 160.558 21.0308 160.849 20.4154L163.816 21.3015C163.301 22.4995 162.503 23.4308 161.423 24.0954C160.351 24.76 159.166 25.0923 157.87 25.0923ZM153.233 18.9015V16.6615H162.495V18.9015H153.233Z"
                            fill="#111827"></path>
                        <path
                            d="M24.5473 11.8941C25.1905 12.5063 25.2068 13.5149 24.5837 14.1468L18.7585 20.054C18.1354 20.686 17.1087 20.702 16.4654 20.0898C15.8222 19.4776 15.8059 18.469 16.429 17.8371L22.2542 11.9299C22.8773 11.2979 23.904 11.2819 24.5473 11.8941Z"
                            fill="url(#paint0_linear_9129_4680)"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 4.54673C0 2.03564 2.07211 0 4.62819 0H21.5399V0.00124069C28.9908 0.0998525 35 6.06429 35 13.4075C35 20.8123 28.8897 26.8151 21.3523 26.8151C18.6648 26.8151 16.1587 26.052 14.0463 24.7342L6.58815 31.9057C4.13431 34.2652 0 32.5573 0 29.1841V4.54673ZM11.5194 22.7055C9.15709 20.295 7.70452 17.0179 7.70452 13.4075C7.70452 12.5277 8.43056 11.8144 9.32619 11.8144C10.2218 11.8144 10.9479 12.5277 10.9479 13.4075C10.9479 19.0526 15.6061 23.6288 21.3523 23.6288C27.0985 23.6288 31.7567 19.0526 31.7567 13.4075C31.7567 7.76248 27.0985 3.18626 21.3523 3.18626H4.62819C3.86336 3.18626 3.24334 3.79536 3.24334 4.54673V29.1841C3.24334 29.7351 3.91866 30.014 4.31948 29.6286L11.5194 22.7055Z"
                            fill="url(#paint1_linear_9129_4680)"></path>
                        <defs>
                            <linearGradient id="paint0_linear_9129_4680" x1="35" y1="1.89063"
                                x2="1.11152" y2="33.4573" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7C3AED"></stop>
                                <stop offset="0.993738" stop-color="#4F46E5"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_9129_4680" x1="35" y1="1.89063"
                                x2="1.11152" y2="33.4573" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7C3AED"></stop>
                                <stop offset="0.993738" stop-color="#4F46E5"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <ul
                    class="text-lg flex items-center justify-center flex-col gap-7 md:flex-row md:gap-12 transition-all duration-500 py-16 mb-10 border-b border-gray-200">
                    <li><a href="#" class="text-gray-800 hover:text-gray-900">Pagedone</a></li>
                    <li><a href="#" class=" text-gray-800 hover:text-gray-900">Products</a></li>
                    <li><a href="#" class=" text-gray-800 hover:text-gray-900">Resources</a></li>
                    <li><a href="#" class=" text-gray-800 hover:text-gray-900">Blogs</a></li>
                    <li><a href="#" class=" text-gray-800 hover:text-gray-900">Support</a></li>
                </ul>
                <div class="flex space-x-10 justify-center items-center mb-14">
                    <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                        <svg class="w-[1.688rem] h-[1.688rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="none">
                            <path
                                d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                        <svg class="w-[1.688rem] h-[1.688rem] " viewBox="0 0 29 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.76556 14.8811C9.76556 12.3243 11.8389 10.2511 14.3972 10.2511C16.9555 10.2511 19.03 12.3243 19.03 14.8811C19.03 17.4379 16.9555 19.5111 14.3972 19.5111C11.8389 19.5111 9.76556 17.4379 9.76556 14.8811ZM7.26117 14.8811C7.26117 18.82 10.456 22.0129 14.3972 22.0129C18.3385 22.0129 21.5333 18.82 21.5333 14.8811C21.5333 10.9422 18.3385 7.7493 14.3972 7.7493C10.456 7.7493 7.26117 10.9422 7.26117 14.8811ZM20.1481 7.46652C20.148 7.79616 20.2457 8.11843 20.4288 8.39258C20.6119 8.66674 20.8723 8.88046 21.177 9.00673C21.4817 9.133 21.8169 9.16614 22.1405 9.10196C22.464 9.03778 22.7612 8.87916 22.9945 8.64617C23.2278 8.41318 23.3868 8.11627 23.4513 7.79299C23.5157 7.46972 23.4829 7.13459 23.3568 6.83C23.2307 6.5254 23.017 6.26502 22.7428 6.08178C22.4687 5.89853 22.1463 5.80065 21.8164 5.80052H21.8158C21.3737 5.80073 20.9497 5.9763 20.637 6.28867C20.3243 6.60104 20.1485 7.02467 20.1481 7.46652ZM8.78274 26.1863C7.42782 26.1246 6.69138 25.8991 6.20197 25.7085C5.55314 25.4561 5.0902 25.1554 4.60346 24.6696C4.11672 24.1839 3.81543 23.7216 3.56395 23.0732C3.37317 22.5843 3.14748 21.8481 3.08588 20.494C3.01851 19.03 3.00506 18.5902 3.00506 14.8812C3.00506 11.1722 3.01962 10.7336 3.08588 9.26841C3.14759 7.9143 3.37495 7.17952 3.56395 6.68919C3.81654 6.04074 4.11739 5.57808 4.60346 5.09163C5.08953 4.60519 5.55203 4.30408 6.20197 4.05274C6.69116 3.86208 7.42782 3.63652 8.78274 3.57497C10.2476 3.50763 10.6877 3.49419 14.3972 3.49419C18.1068 3.49419 18.5473 3.50874 20.0134 3.57497C21.3683 3.63663 22.1035 3.86385 22.5941 4.05274C23.243 4.30408 23.7059 4.60585 24.1926 5.09163C24.6794 5.57741 24.9796 6.04074 25.2322 6.68919C25.4229 7.17808 25.6486 7.9143 25.7102 9.26841C25.7776 10.7336 25.7911 11.1722 25.7911 14.8812C25.7911 18.5902 25.7776 19.0287 25.7102 20.494C25.6485 21.8481 25.4217 22.5841 25.2322 23.0732C24.9796 23.7216 24.6787 24.1843 24.1926 24.6696C23.7066 25.155 23.243 25.4561 22.5941 25.7085C22.105 25.8992 21.3683 26.1247 20.0134 26.1863C18.5485 26.2536 18.1084 26.2671 14.3972 26.2671C10.686 26.2671 10.2472 26.2536 8.78274 26.1863ZM8.66768 1.0763C7.18823 1.14363 6.17729 1.37808 5.29443 1.72141C4.3801 2.07597 3.60608 2.55163 2.83262 3.32341C2.05916 4.09519 1.58443 4.86997 1.22966 5.78374C0.88612 6.66663 0.651535 7.67641 0.584162 9.15497C0.515676 10.6359 0.5 11.1093 0.5 14.8811C0.5 18.6529 0.515676 19.1263 0.584162 20.6072C0.651535 22.0859 0.88612 23.0955 1.22966 23.9784C1.58443 24.8916 2.05927 25.6673 2.83262 26.4387C3.60597 27.2102 4.3801 27.6852 5.29443 28.0407C6.17896 28.3841 7.18823 28.6185 8.66768 28.6859C10.1502 28.7532 10.6232 28.77 14.3972 28.77C18.1713 28.77 18.645 28.7543 20.1268 28.6859C21.6063 28.6185 22.6166 28.3841 23.5 28.0407C24.4138 27.6852 25.1884 27.2105 25.9618 26.4387C26.7353 25.667 27.209 24.8916 27.5648 23.9784C27.9083 23.0955 28.144 22.0857 28.2103 20.6072C28.2777 19.1252 28.2933 18.6529 28.2933 14.8811C28.2933 11.1093 28.2777 10.6359 28.2103 9.15497C28.1429 7.6763 27.9083 6.66608 27.5648 5.78374C27.209 4.87052 26.7341 4.09641 25.9618 3.32341C25.1896 2.55041 24.4138 2.07597 23.5011 1.72141C22.6166 1.37808 21.6062 1.14252 20.1279 1.0763C18.6461 1.00897 18.1724 0.992188 14.3983 0.992188C10.6243 0.992188 10.1502 1.00785 8.66768 1.0763Z"
                                fill="currentColor" />
                        </svg>

                    </a>
                    <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                        <svg class="w-[0.938rem] h-[1.625rem]" viewBox="0 0 15 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.7926 14.4697L14.5174 9.86889H10.0528V6.87836C10.0528 5.62033 10.6761 4.39105 12.6692 4.39105H14.7275V0.473179C13.5289 0.282204 12.3177 0.178886 11.1037 0.164062C7.42917 0.164062 5.0302 2.37101 5.0302 6.36077V9.86889H0.957031V14.4697H5.0302V25.5979H10.0528V14.4697H13.7926Z"
                                fill="currentColor" />
                        </svg>

                    </a>
                    <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                        <svg class="w-[1.875rem] h-[1.375rem]" viewBox="0 0 30 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M26.3106 1.27838C27.5782 1.62071 28.5745 2.61957 28.9113 3.88573C29.524 6.18356 29.524 10.9809 29.524 10.9809C29.524 10.9809 29.524 15.7782 28.9113 18.076C28.5698 19.3469 27.5735 20.3457 26.3106 20.6834C24.0186 21.2977 14.8226 21.2977 14.8226 21.2977C14.8226 21.2977 5.63122 21.2977 3.33456 20.6834C2.06695 20.3411 1.07063 19.3422 0.73385 18.076C0.121094 15.7782 0.121094 10.9809 0.121094 10.9809C0.121094 10.9809 0.121094 6.18356 0.73385 3.88573C1.07531 2.61488 2.07162 1.61602 3.33456 1.27838C5.63122 0.664062 14.8226 0.664062 14.8226 0.664062C14.8226 0.664062 24.0186 0.664062 26.3106 1.27838ZM19.5234 10.9809L11.885 15.403V6.55872L19.5234 10.9809Z"
                                fill="currentColor" />
                        </svg>

                    </a>
                </div>
                <span class="text-lg text-gray-500 text-center block">©<a href="https://pagedone.io/">pagedone</a>
                    2024, All rights reserved.</span>
            </div>
        </div>
    </footer>




</body>

</html>
