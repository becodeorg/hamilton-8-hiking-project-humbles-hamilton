<?php require 'partials/head.php'; ?>

<?php require 'partials/nav.php'; ?>

<?php require 'partials/banner.php'; ?>




<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


            <ul>

                <?php foreach ($hikes as $hike) : ?>

                    <li>
                        <a style='font-weight: bold;' class="text-blue-600 hover:underline" href="/note?id= <?= $hike['id'] ?> ">
                            <?= htmlspecialchars($hike['name']) ?> ...
                        </a>
                    </li>

                <?php endforeach ?>

            </ul>

            <p class="mt-6">
                <a class="text-blue-600 hover:underline" href="/hikes/create">Add a new hike...</a>
            </p>

        </div>


    </div>
</main>


<?php require 'partials/footer.php'; ?>