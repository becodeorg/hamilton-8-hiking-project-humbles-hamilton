<?php require 'Partials/head.php'; ?>

<?php require 'Partials/nav.php'; ?>

<?php require 'Partials/banner.php'; ?>




<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 grid grid-cols-5 gap-3">

            <form action="/hikes/show" method="POST">
                <div class="w-full flex justify-center items-center border border-blue-500 rounded">
                    <input style="display: none" type="text" name="tag" id="tag" value="1"></input>
                    <button class="w-full h-full pb-3 pt-3" type="submit">Forêt</button>
                </div>
            </form>

            <form action="/hikes/show" method="POST">
                <div class="w-full flex justify-center items-center border border-blue-500 rounded">
                    <input style="display: none" type="text" name="tag" id="tag" value="2"></input>
                    <button class="w-full h-full pb-3 pt-3" type="submit">Ville</button>
                </div>
            </form>

            <form action="/hikes/show" method="POST">
                <div class="w-full flex justify-center items-center border border-blue-500 rounded">
                    <input style="display: none" type="text" name="tag" id="tag" value="3"></input>
                    <button class="w-full h-full pb-3 pt-3" type="submit">Facile</button>
                </div>
            </form>

            <form action="/hikes/show" method="POST">
                <div class="w-full flex justify-center items-center border border-blue-500 rounded">
                    <input style="display: none" type="text" name="tag" id="tag" value="4"></input>
                    <button class="w-full h-full pb-3 pt-3" type="submit">Moyen</button>
                </div>
            </form>

            <form action="/hikes/show" method="POST">
                <div class="w-full flex justify-center items-center border border-blue-500 rounded">
                    <input style="display: none" type="text" name="tag" id="tag" value="5"></input>
                    <button class="w-full h-full pb-3 pt-3" type="submit">Difficile</button>
                </div>
            </form>

        </div>

        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 grid grid-cols-3 gap-4">





            <?php foreach ($hikes as $hike) : ?>

                <div class="max-w-sm rounded overflow-hidden shadow-lg ">
                    <!-- <img class="w-full" src="#" alt="Sunset in the mountains"> -->
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"><?= htmlspecialchars($hike['name']) ?></div>
                        <?php
                        $descriptionWords = explode(' ', $hike['description']);
                        $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15));
                        echo htmlspecialchars($shortDescription) . "...";
                        ?>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><i class="fa-regular fa-clock me-1"></i><?= htmlspecialchars($hike['duration']) ?> hours</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><i class="fa-solid fa-location-dot me-1"></i><?= htmlspecialchars($hike['distance']) ?> km</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><i class="fa-solid fa-arrow-trend-up me-1"></i><?= htmlspecialchars($hike['elevation_gain']) ?> m</span>
                    </div>
                </div>

            <?php endforeach ?>


            <div class="max-w-sm rounded overflow-hidden shadow-lg flex justify-center items-center">
                <a class="h-full w-full" href="/hikes/create"><button class="w-full h-full "><i class="fa-solid fa-circle-plus fa-2xl"></i></button></a>

            </div>



        </div>


    </div>
</main>


<?php require 'Partials/footer.php'; ?>