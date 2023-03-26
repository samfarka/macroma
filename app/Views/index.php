<?= $this->extend("layout/pageLayout") ?>
<?= $this->section("content"); ?>
<div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
    <div class="mx-auto max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                <div class="lg:py-24">
                    <a href="/games" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-blue-500 to-cyan-600 rounded-full">Tertarik?</span>
                        <span class="ml-4 text-sm">Kunjungi halaman produk kami</span>
                        <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                        <span class="block">Cara menyenangkan</span>
                        <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-blue-200 to-cyan-400 sm:pb-5">Bermain dan Belajar</span>
                    </h1>
                    <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Wujudkan impianmu di dunia yang sangat menyenangkan ini. Gabung diantara para gamer dan pelajar di seluruh indonesia. True Gamers Always Learning.</p>
                    <div class="mt-10 sm:mt-12">

                        <a href="/games">
                            <button class="block w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-blue-500 to-cyan-600 text-white font-medium hover:from-blue-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">Mulai buat sesuatu yang keren!</button>
                        </a>
                        <p class="mt-3 text-sm text-gray-300 sm:mt-4">Kami melayani pelanggan dengan sepenuh hati sesuai <a href="#" class="font-medium text-white">syarat dan ketentuan</a>.</p>

                    </div>
                </div>
            </div>
            <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                    <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="assets/ilu1.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Feature section with grid -->
<div class="relative bg-white py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">macroma studio</h2>
        <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Pelayanan adalah yang utama!</p>
        <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">Macroma Studio melayani pelanggan dengan sepenuh hati juga dengan fasilitas yang professional dan menarik.</p>
        <div class="mt-12">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="pt-3 md:pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-md shadow-lg">
                                    <!-- Heroicon name: outline/cloud-upload -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Jasa Upload Aplikasi</h3>
                            <p class="mt-5 text-base text-gray-500">Kami bisa membantu publikasi aplikasi melalui web atau playstore untuk berbagai kebutuhan, termasuk skripsi untuk mahasiswa.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-3 md:pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-md shadow-lg">
                                    <!-- Heroicon name: outline/lock-closed -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Keamanan Produk</h3>
                            <p class="mt-5 text-base text-gray-500">Kami melindungi data - data pelanggan dengan memasang keamanan pada berbagai produk kita.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-3 md:pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-md shadow-lg">
                                    <!-- Heroicon name: outline/refresh -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Update</h3>
                            <p class="mt-5 text-base text-gray-500">Aplikasi yang kita kelola akan kita update sesuai kebutuhan pelanggan, tentunya dengan biaya update yang terjangkau.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-3 md:pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-md shadow-lg">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Keamanan Data</h3>
                            <p class="mt-5 text-base text-gray-500">Selain keamanan produk kami juga menjaga keamanan data dari pelanggan misalkan dalam produk mengandung unsur hak cipta.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-3 md:pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-md shadow-lg">
                                    <!-- Heroicon name: outline/cog -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Dedikasi Penuh</h3>
                            <p class="mt-5 text-base text-gray-500">Macroma Studio bekerja keras agar Aplikasi yang dibuat menjadi aplikasi yang bagus dan sesuai fungsinya.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-3 md:pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-md shadow-lg">
                                    <!-- Heroicon name: outline/server -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Manajemen Data</h3>
                            <p class="mt-5 text-base text-gray-500">Kami juga memanajemen database aplikasi yang kami kelola dengan baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial section -->
<div class=" pb-16  bg-gradient-to-r from-blue-500 to-cyan-600 lg:pb-0 lg:z-10 lg:relative">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="relative -mt-12 lg:-my-8">
            <!-- <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div> -->
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                <div class=" rounded-xl shadow-xl overflow-hidden  lg:h-full">
                    <img class="object-cover lg:h-full lg:w-full" src="assets/fer.png" alt="">
                </div>
            </div>
        </div>
        <div class="mt-6 lg:mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                <blockquote>
                    <div>
                        <svg class="w-8 h-8 md:h-12 md:w-12 text-white opacity-40" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <p class="mt-6  text-base  md:text-xl lg:text-2xl font-medium text-white">Stigma buruk orang tua tentang game sudah ada sejak dulu. Namun seiring berkembangnya teknologi dan era yang semakin maju. Game tidak hanya bisa digunakan untuk bersenang - senang namun sekarang game bisa dimanfaatkan sebagai media belajar juga.</p>
                    </div>
                    <footer class="mt-6">
                        <p class="text-base font-medium text-white">M Ferrari Firmansyah</p>
                        <p class="text-base  font-medium text-cyan-100">CEO Macroma Studio</p>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<!-- Blog section -->
<div class="relative bg-gray-50 py-16 sm:py-24 lg:py-32">
    <div class="relative">
        <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">Macroma Studio</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Semua kebutuhan digitalmu Tersedia!</p>
            <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">Machroma studio tidak hanya menyedikan jasa pembuatan game dan aplikasi. Jelajahi kebutuhan digitalmu di macroma studio.</p>
        </div>
        <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="assets/web.svg" alt="">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-cyan-600">
                            <a href="#" class="hover:underline"> Website Builder </a>
                        </p>
                        <a href="#" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">kami membuatkan situs web untuk bisnismu!</p>
                            <p class="mt-3 text-base text-gray-500">Macroma Studio juga menyediakan jasa pembuatan website untuk portofolia atau bisnismu.</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="assets/vid.svg" alt="">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-cyan-600">
                            <a href="#" class="hover:underline"> Video Editor </a>
                        </p>
                        <a href="#" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">Buat video menarik bersama kami!</p>
                            <p class="mt-3 text-base text-gray-500">Di Macroma Studio kami juga menyediakan jasa pembuatan video profil perusahaan , iklan , portofolio dan lainnya.</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="assets/crea.svg" alt="">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-cyan-600">
                            <a href="#" class="hover:underline"> Graphic Design </a>
                        </p>
                        <a href="#" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">Buat Aset Digitalmu!</p>
                            <p class="mt-3 text-base text-gray-500">Di Macroma Studio kami juga membuat desain grafis seperti logo, character game, nft dan lainnya.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="relative bg-gray-900">
    <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
        <img class="w-full h-full object-cover" src="assets/col.svg" alt="">
        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-600 mix-blend-multiply"></div>
    </div>
    <div class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
        <div class="md:ml-auto md:w-1/2 md:pl-10">
            <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">Aksi dan kolaborasi</h2>
            <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">Untuk Pendidikan</p>
            <p class="mt-3 text-lg text-gray-300">Kami turut serta bekerja sama dengan berbagai pihak untuk mendukung pendidikan. Karena dasar dari masyarakat yang baik adalah pendidikan.</p>
            <div class="mt-8">
                <div class="inline-flex rounded-md shadow">
                    <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                        Hubungi kami untuk kerjasama!
                        <!-- Heroicon name: solid/external-link -->
                        <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                            <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>