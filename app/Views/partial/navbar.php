<!-- Header -->
<header class="relative">
    <div class="bg-gray-900 pt-6 ">
        <nav x-data="navbar" class="relative max-w-7xl mx-auto flex items-center  px-4 sm:px-6" aria-label="Global">
            <div class="flex justify-between items-center flex-1 ">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                        <span class="sr-only">MACROMA STUDIO</span>
                        <img class=" w-10 md:w-11 " src="/assets/logo.png" alt="logo">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button x-bind="nt" type="button" class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-200 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                            <span class="sr-only">Buka menu Utama</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <button x-bind="ntc" type="button" class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-200 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="space-x-8  hidden md:ml-10 md:flex">
                    <a href="/" class="text-base font-medium  <?= $title == "home" ? "text-blue-500 hover:text-blue-700 ": " text-white  hover:text-gray-300"  ?>">Beranda</a>

                    <a href="/about" class="text-base font-medium <?= $title == "about" ? "text-blue-500 hover:text-blue-700 ": " text-white  hover:text-gray-300"  ?>">Tentang</a>

                    <a href="/games" class="text-base font-medium <?= $title == "games" ? "text-blue-500 hover:text-blue-700 ": " text-white  hover:text-gray-300"  ?>">Produk</a>

                    <a href="/contact" class="text-base font-medium <?= $title == "contact" ? "text-blue-500 hover:text-blue-700 ": " text-white   hover:text-gray-300"  ?>">Kontak</a>
                </div>
            </div>


            <div x-bind="nc" x-cloak class=" absolute origin-top inset-x-2 z-50 top-10 w-full md:hidden md:w-auto" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-y-0 " x-transition:enter-end="opacity-100 scale-y-100" x-transition:leave="transition ease-in duration-200 " x-transition:leave-start="opacity-100 scale-y-100" x-transition:leave-end="opacity-0 scale-y-0">
                <ul class="flex flex-col p-4 mt-4 border      bg-gray-800 border-gray-700">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4   <?= $title == "home" ? "text-white bg-blue-700 rounded   ": "text-gray-400  hover:bg-gray-700 hover:text-white hover:bg-transparent"  ?>" >Beranda</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 pl-3 pr-4 rounded <?= $title == "about" ? "text-white bg-blue-700 rounded   ": "text-gray-400  hover:bg-gray-700 hover:text-white hover:bg-transparent"  ?>">Tentang</a>
                    </li>
                    <li>
                        <a href="/games" class="block py-2 pl-3 pr-4 rounded <?= $title == "games" ? "text-white bg-blue-700 rounded   ": "text-gray-400  hover:bg-gray-700 hover:text-white hover:bg-transparent"  ?>">Produk</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 pl-3 pr-4 rounded <?= $title == "contact" ? "text-white bg-blue-700 rounded   ": "text-gray-400  hover:bg-gray-700 hover:text-white hover:bg-transparent"  ?>">Kontak</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

</header>
<!-- END Header -->