<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="assets/logo.png">
</head>
<body>
    
    <!-- Page Container -->
<div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
  <!-- Page Content -->
  <main id="page-content" class="flex flex-auto flex-col max-w-full">
    <!-- Hero -->
    <div class="bg-white overflow-hidden">
     
    <?= $this->include('partial/navbar') ?>

    </div>
    <!-- END Hero -->

   <!-- About Section: Company with Values -->
   <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
        <div class="mx-auto max-w-7xl lg:px-8">
          <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
              <div class="lg:py-24">
                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                  <span class="block">PROFIL</span>
                  <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-blue-200 to-cyan-400 sm:pb-5">MACROMA STUDIO</span>
                </h1>
                <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Macroma Studio adalah Developer Game dan Aplikasi yang memperkenalkan metode belajar dengan media game. Agar pembelajaran lebih menyenangkan.</p>
                <br>
                <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Macroma Studio didirikan pada 17 Januari 2023 di Malang. Selain menjadi game developer, kami juga menjadi web developer dan juga grapic designer.</p>
            </div>
            </div>
            <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="assets/logo.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- END About Section: Company with Values -->

 

  

    <!-- Footer -->
    <?= $this->include('partial/footer') ?>
    <!-- END Footer -->
  </main>
  <!-- END Page Content -->
</div>
<!-- END Page Container -->

</body>
</html>