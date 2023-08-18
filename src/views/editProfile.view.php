<?php require 'partials/head.php'; ?>

<?php require 'partials/nav.php'; ?>

<?php require 'partials/banner.php'; ?>

<div class="flex justify-center">
    <form action="#" method="post">
        <div>
            <label for="firstname">Your Firstname</label>
            <input type="text" id="firstname" name="firstname" value="<?= $user['firstName']; ?>" placeholder="Firstname" required>
        </div>
        <div>
            <label for="lastname">Your Lastname</label>
            <input type="text" id="lastname" name="lastname" value="<?= $user['lastName']; ?>" placeholder="Lastname" required>
        </div>
        <div>
            <label for="nickname">Your Nickname</label>
            <input type="text" id="nickname" name="nickname" value="<?= $user['nickname']; ?>" placeholder="Nickname" required>
        </div>

        <div>
            <label for="email">Your Email address</label>
            <input type="email" id="email" name="email" value="<?= $user['email']; ?>" placeholder="email@example.com" required>
        </div>
        <div>
            <label for="password">Your New Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required minlength="6">
        </div>
        <div>
            <label for="passwordConfirm">Confirm your new password</label>
            <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="New password confirmation" required minlength="6">
        </div>

    </form>
</div>

<div>
    <div class="px-4 sm:px-0">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Edit your personal informations</h2>
        </p>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Profile picture</dt>
            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                        <div class="flex w-0 flex-1 items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                            </svg>
                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                                <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                            </div>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                        </div>
                    </li>
                </ul>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Firstname</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <label for="firstname">Your Firstname</label>
                        <input type="text" id="firstname" name="firstname" value="<?= $user['firstName']; ?>" placeholder="Firstname" required>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Lastname</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <label for="lastname">Your Lastname</label>
                        <input type="text" id="lastname" name="lastname" value="<?= $user['lastName']; ?>" placeholder="Lastname" required>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Nickname</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <label for="nickname">Your Nickname</label>
                        <input type="text" id="nickname" name="nickname" value="<?= $user['nickname']; ?>" placeholder="Nickname" required>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <label for="email">Your Email address</label>
                        <input type="email" id="email" name="email" value="<?= $user['email']; ?>" placeholder="email@example.com" required>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Your new password</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <label for="password">Your New Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required minlength="6">
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Your new password</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <label for="passwordConfirm">Confirm your new password</label>
                        <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="New password confirmation" required minlength="6">
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    <div>
        <a href="/controllers/profile/create.php">Cancel</a>
        <button type="submit">Save changes</button>
    </div>
    <?php require 'partials/footer.php'; ?>