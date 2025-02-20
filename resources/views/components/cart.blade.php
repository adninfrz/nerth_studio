<div>
    <button class="font-medium text-xl px-5 py-2.5 mb-2" type="button" data-drawer-target="drawer-right"
                    data-drawer-show="drawer-right" data-drawer-placement="right" aria-controls="drawer-right">
                    <img src="{{ asset('img/cart(0)_icon.png') }}" alt="logo">
                </button>

                <!-- Cart Details -->
            <div id="drawer-right"
            class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-96 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-right-label">
            <h5 id="drawer-right-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
                CART (0)
            </h5>
            <button type="button" data-drawer-hide="drawer-right" aria-controls="drawer-right"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close</span>
            </button>
        </div>
    </div>
</div>