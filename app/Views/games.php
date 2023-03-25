<?= $this->extend("layout/pageLayout") ?>
<?= $this->section("content"); ?>
<div class="bg-gray-900  bg-cover">
  <h1 class="text-white flex flex-col max-w-7xl mx-auto  pl-6 md:pl-24 pt-10 font-bold text-3xl md:text-5xl mb-6 md:mb-10">
    <span>Macroma Studio</span>
    <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-blue-200 to-cyan-400 sm:pb-5">Game Colection</span>
  </h1>
  <!-- Courses Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-8">
    <!-- Course Card -->
    <div class="flex flex-col group text-white sm:col-span-2 rounded shadow-sm bg-[url('/assets/putri.png')] overflow-hidden">
      <div class="bg-black bg-opacity-30 flex flex-col grow">
        <div class="flex justify-between items-start p-4">
          <div>
            <div class="font-semibold inline-flex px-2 py-1 leading-4 bg-opacity-25 text-sm rounded text-black-700 bg-black-200 text-white bg-black">Strategy</div>
          </div>
          <div class="inline-flex -mt-2 -mr-2 transition-opacity opacity-25 group-hover:opacity-100">
            <!--for buton-->
            <a href="https://putri.games.macroma.site/"><button type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm border-orange-700 bg-orange-700 text-white hover:text-white hover:bg-orange-800 hover:border-orange-800 focus:ring focus:ring-orange-500 focus:ring-opacity-50 active:bg-orange-700 active:border-orange-700">
                PLAY NOW
              </button></a>
          </div>
        </div>
        <div class="py-6 px-4 space-y-1 grow">
          <div class="text-yellow-400">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold"><a href="javascript:void(0)" class="text-white-600 hover:text-white-400 text-white hover:opacity-75">Putri And The Forest Fairy</a></h3>
        </div>
        <div class="p-4 uppercase tracking-wide text-sm font-semibold opacity-75">500++ Players | Tower Defense</div>
      </div>
    </div>
    <!-- END Course Card -->

    <!-- Course Card -->
    <div class="flex flex-col group text-white rounded shadow-sm bg-[url('/assets/lab.png')] overflow-hidden">
      <div class="bg-black bg-opacity-30 flex flex-col grow">
        <div class="flex justify-between items-start p-4">
          <div>
            <div class="font-semibold inline-flex px-2 py-1 leading-4 bg-opacity-25 text-sm rounded text-black-700 bg-black-200 text-white bg-black">Education</div>
          </div>
          <div class="inline-flex -mt-2 -mr-2 transition-opacity opacity-25 group-hover:opacity-100">
            <!--for buton-->
            <a href="https://labyrinth.games.macroma.site/"><button type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm border-orange-700 bg-orange-700 text-white hover:text-white hover:bg-orange-800 hover:border-orange-800 focus:ring focus:ring-orange-500 focus:ring-opacity-50 active:bg-orange-700 active:border-orange-700">
                PLAY NOW
              </button></a>
          </div>
        </div>
        <div class="py-6 px-4 space-y-1 grow">
          <div class="text-yellow-400">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold"><a href="javascript:void(0)" class="text-white-600 hover:text-white-400 text-white hover:opacity-75">The Mysterious labirynth</a></h3>
        </div>
        <div class="p-4 uppercase tracking-wide text-sm font-semibold opacity-75">100++ players | Puzzle</div>
      </div>
    </div>
    <!-- END Course Card -->

    <!-- Course Card -->
    <div class="flex flex-col group text-white rounded shadow-sm bg-[url('/assets/hola.png')] overflow-hidden">
      <div class="bg-black bg-opacity-30 flex flex-col grow">
        <div class="flex justify-between items-start p-4">
          <div>
            <div class="font-semibold inline-flex px-2 py-1 leading-4 bg-opacity-25 text-sm rounded text-black-700 bg-black-200 text-white bg-black">Education</div>
          </div>
          <div class="inline-flex -mt-2 -mr-2 transition-opacity opacity-25 group-hover:opacity-100">
            <!--for buton-->
            <a href="https://holavoca.games.macroma.site/"><button type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm border-orange-700 bg-orange-700 text-white hover:text-white hover:bg-orange-800 hover:border-orange-800 focus:ring focus:ring-orange-500 focus:ring-opacity-50 active:bg-orange-700 active:border-orange-700">
                PLAY NOW
              </button></a>
          </div>
        </div>
        <div class="py-6 px-4 space-y-1 grow">
          <div class="text-yellow-400">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold"><a href="javascript:void(0)" class="text-white-600 hover:text-white-400 text-white hover:opacity-75">Hola Voca House</a></h3>
        </div>
        <div class="p-4 uppercase tracking-wide text-sm font-semibold opacity-75">100++ Players | PUZZLE</div>
      </div>
    </div>
    <!-- END Course Card -->

    <!-- Course Card -->
    <div class="flex flex-col group text-white rounded shadow-sm bg-[url('/assets/hungry.PNG')] overflow-hidden">
      <div class="bg-black bg-opacity-30 flex flex-col grow">
        <div class="flex justify-between items-start p-4">
          <div>
            <div class="font-semibold inline-flex px-2 py-1 leading-4 bg-opacity-25 text-sm rounded text-black-700 bg-black-200 text-white bg-black">Education</div>
          </div>
          <div class="inline-flex -mt-2 -mr-2 transition-opacity opacity-25 group-hover:opacity-100">
            <a href="https://hungry.games.macroma.site/"><button type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm border-orange-700 bg-orange-700 text-white hover:text-white hover:bg-orange-800 hover:border-orange-800 focus:ring focus:ring-orange-500 focus:ring-opacity-50 active:bg-orange-700 active:border-orange-700">
                PLAY NOW
              </button></a>
          </div>
        </div>
        <div class="py-6 px-4 space-y-1 grow">
          <div class="text-yellow-400">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold"><a href="javascript:void(0)" class="text-white-600 hover:text-white-400 text-white hover:opacity-75">Hungry Bulary</a></h3>
        </div>
        <div class="p-4 uppercase tracking-wide text-sm font-semibold opacity-75">100++ Players | CASUAL</div>
      </div>
    </div>
    <!-- END Course Card -->

    <!-- Course Card -->
    <div class="flex flex-col group text-white rounded shadow-sm bg-[url('/assets/math.PNG')] overflow-hidden">
      <div class="bg-black bg-opacity-30 flex flex-col grow">
        <div class="flex justify-between items-start p-4">
          <div>
            <div class="font-semibold inline-flex px-2 py-1 leading-4 bg-opacity-25 text-sm rounded text-black-700 bg-black-200 text-white bg-black">Education</div>
          </div>
          <div class="inline-flex -mt-2 -mr-2 transition-opacity opacity-25 group-hover:opacity-100">
            <a href="#"><button type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm border-orange-700 bg-orange-700 text-white hover:text-white hover:bg-orange-800 hover:border-orange-800 focus:ring focus:ring-orange-500 focus:ring-opacity-50 active:bg-orange-700 active:border-orange-700">
                PLAY NOW
              </button></a>
          </div>
        </div>
        <div class="py-6 px-4 space-y-1 grow">
          <div class="text-yellow-400">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold"><a href="javascript:void(0)" class="text-white-600 hover:text-white-400 text-white hover:opacity-75">Math Genius :Fraction</a></h3>
        </div>
        <div class="p-4 uppercase tracking-wide text-sm font-semibold opacity-75">100++ Players | MATHMATIC</div>
      </div>
    </div>
    <!-- END Course Card -->
  </div>
  <br>
  <br>
  <!-- END Courses Grid -->
</div>
<?= $this->endSection();  ?>