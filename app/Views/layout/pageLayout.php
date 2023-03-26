<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <script src="/js/main.js" defer></script>
  <title>d</title>
</head>

<body>
  <div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-900">
    <?= $this->include("partial/navbar") ?>
    <main id="page-content" class="flex flex-auto flex-col max-w-full">
      <?= $this->renderSection("content") ?>
    </main>
    <?= $this->include("partial/footer") ?>
  </div>

</body>

</html>