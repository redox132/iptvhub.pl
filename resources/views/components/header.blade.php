  <header class="inset-x-0 top-0 z-50 fixed top-0 z-10 bg-white">
      {{-- header --}}
      <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
          <div class="flex lg:flex-1">
              <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                  <img src="{{ asset('images/logo.png') }}" alt="">
              </a>
          </div>
          <div class="flex lg:hidden">
              <button type="button" command="show-modal" commandfor="mobile-menu"
                  class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                  <span class="sr-only">Open main menu</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                      aria-hidden="true" class="size-6">
                      <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                  </svg>
              </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
              <a href="{{ route('home') }}"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
              <a href="{{ route('freetrail') }}"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Free
                  Trial</a>
              <a href="#services"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Services</a>
              <a href="#features"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
              <a href="{{ route('tutorial') }}"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Tutorial</a>
              <a href="#pricing"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Pricing</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Get started <span
                      aria-hidden="true">&rarr;</span></a>
          </div>
      </nav>
      {{-- end of header --}}

      {{-- mobile menu --}}
      <el-dialog>
          <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
              <div tabindex="0" class="fixed inset-0 focus:outline-none">
                  <el-dialog-panel
                      class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                      <div class="flex items-center justify-between">
                          <a href="#" class="-m-1.5 p-1.5">
                              <span class="sr-only">IPTV Hub</span>
                              <img src="{{ asset('images/logo.png') }}" alt="">
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
                                  <a href="{{ route('home') }}"
                                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                                  <a href="{{ route('freetrail') }}"
                                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Free
                                      Trial</a>
                                  <a href="#services"
                                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
                                  <a href="#features"
                                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                  <a href="{{ route('tutorial') }}"
                                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Tutorial</a>
                                  <a href="#pricing"
                                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Pricing</a>
                              </div>

                              <div
                                  class="relative text-center rounded-full px-3 py-1 text-sm/6 text-gray-800 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                  Discover our premium IPTV service.
                                  <a href="#" class="font-semibold text-indigo-500">
                                      <span aria-hidden="true" class="absolute inset-0">
                                      </span>
                                      Explore now
                                      <span aria-hidden="true">
                                          &rarr;
                                      </span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </el-dialog-panel>
              </div>
          </dialog>
      </el-dialog>
      {{-- end of menu --}}
  </header>
