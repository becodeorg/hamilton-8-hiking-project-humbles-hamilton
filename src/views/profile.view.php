<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php require 'partials/banner.php' ?>

<div class="bg-gray-100 flex items-center justify-center">
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-16">

        <div class="my profile">
          <div class="flex -space-x-2 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" src="<?= $_SESSION['user']['profil_picture']?>" class="inline-block h-50 w-50 rounded-full ring-2 ring-white" alt="">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
              <p class="text-base font-semibold text-gray-900"><?= $_SESSION['user']['firstname'] . " " . $_SESSION['user']['lastname']?>Firstname Lastname</p>
              <span class="absolute inset-0"></span>
              @nickname<?= $_SESSION['user']['nickname'] ?>
              <br>
              <span class="absolute inset-0"></span>
              email<?= $_SESSION['user']['email'] ?>
          </h3>
          <div class="mt-14 flex items-center justify-center">
                <a href="/editProfile/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
            </div>
        </div>
      </div>
    </div>
    
<?php require 'partials/footer.php'; ?>