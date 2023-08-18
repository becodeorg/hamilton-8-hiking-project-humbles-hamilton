<?php 
require 'partials/head.php'; 
require 'partials/nav.php'; 
require 'partials/banner.php'; 
?>

<div class="bg-gray-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">

        <div class="my profile">
          <div class="relative h-80 w-80 overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="" alt="User profile picture">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
              <p class="text-base font-semibold text-gray-900"><?= $firstname . " " . $lastname ?></p>
              <span class="absolute inset-0"></span>
              @<?= $nickname ?>
          </h3>
          <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/editProfile/create.php" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>