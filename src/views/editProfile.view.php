<?php require 'partials/head.php'; ?>

<?php require 'partials/nav.php'; ?>

<?php require 'partials/banner.php'; ?>

<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form>
            <div class="space-y-12">
                <div>
                <form action="upload.php" method="POST" enctype="multipart/form-data" class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Profile picture</label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <input type="file" name="photo" id="photo" accept="image/*" class="hidden">
                            <label for="photo" class="cursor-pointer">
                                <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                        </div>
                </form>

            </div>
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Firstname</label>
                        <div class="mt-2">
                            <input type="text" name="firstname" id="firstname" autocomplete="given-name" placeholder="<?= $_SESSION['users']['firstname'] ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Lastname</label>
                        <div class="mt-2">
                            <input type="text" name="lastname" id="lastname" autocomplete="family-name" placeholder="<?= $_SESSION['users']['lastname'] ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="nickname" class="block text-sm font-medium leading-6 text-gray-900">Nickname</label>
                        <div class="mt-2">
                            <input type="text" name="nickname" id="nickname" autocomplete="nickname" placeholder="<?= $_SESSION['users']['nickname'] ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" placeholder="<?= $_SESSION['users']['email'] ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">New password</label>
                        <div class="mt-2">
                            <input type="password" id="password" name="password" required minlength="7" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">New password confirmation</label>
                        <div class="mt-2">
                            <input type="password" id="passwordConfirm" name="passwordConfirm" required minlength="7" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="mb-6 flex items-center justify-center gap-x-6">
    <a href="/profile/create" role="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
</div>
</form>

<?php require 'partials/footer.php'; ?>