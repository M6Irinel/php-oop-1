<?php

include_once __DIR__ . '/components/movies-array.php';
include_once __DIR__ . '/components/movie.php';
include_once __DIR__ . '/components/actor.php';


$arr_movies = [];
foreach ($movies as $v) {
    $arr_movies[] = new Movie(
        $v['name'],
        $v['main_actor'],
        $v['year'],
        $v['personage'],
        $v['poster'],
        actorsArray($v['actors'])
    );
}

function actorsArray($actors)
{
    return array_map(
        function ($a) {
            return new Actor($a['name'], $a['role'], $a['genre']);
        },
        $actors
    );
}

?>


<?php
// Questo è il contenuto del tag <head />
include_once __DIR__ . '/components/head.php';
?>


<?php
include_once __DIR__ . '/components/set-actor.php';


// addNewActor($arr_movies, indice della card es: San Andreas = 2, nome del nuovo attore, ruolo del attore, genere del attore es: maschio o femmina in una lettera maiuscola);
// Aggiungi nuovo attore
addNewActor($arr_movies, 1, 'carlo', 'bello', 'M');


// removeActor($arr_movies, indice della card es: Godzilla = 7, nome del attore da rimuovere);
// Rimuovi attore
removeActor($arr_movies, 3, 'devon aoki');
?>



<main class="my-15">
    <section>
        <div class="container px-2">
            <ul class="row row-10-xl gap-30">

                <?php foreach ($arr_movies as $v) : ?>
                    <li class="col-6 col-4-md col-3-lg col-2-xl bg-orange-7 border rounded-3 shadow-4-dark p-2 t-center transition-all duration-3 bg-orange-6-H shadow-5-light-H scale-lg-H flex f-column">

                        <div>
                            <img class="obj-cover w-100 aspect-ratio-1 obj-top" src="<?= $v->poster; ?>" alt="<?= $v->name; ?>">
                        </div>

                        <h2 class="pt-3 pb-3 white">
                            <?= $v->name; ?>
                        </h2>

                        <p class="py-1">
                            Pubblicato il
                            <span class="white bold">
                                <?= $v->year; ?>
                            </span>
                        </p>

                        <h4>
                            Attore principale:
                            <span class="block py-1 white">
                                <?= $v->main_actor; ?>
                            </span>
                        </h4>

                        <p>
                            nel ruolo di:
                            <span class="block bold py-1 white">
                                <?= $v->personage; ?>
                            </span>
                        </p>

                        <div class="look mt-auto flex f-column between relative">

                            <h4 class="mb-1 mt-auto">Alcuni attori del film:</h4>

                            <div class="bg-violet-8 cursor-pointer rounded-full orange-7">▼</div>

                            <ul class="actors remove absolute bg-orange-5 bottom left right shadow-3-dark rounded-3 hidden border">

                                <?php foreach ($v->actors as $actor) : ?>
                                    <li class="border-b py-1 px-1">

                                        <p class="bold">
                                            <?= $actor->name; ?>
                                        </p>

                                        <p class="flex between">
                                            <?= $actor->role; ?>
                                            <span class="bold">
                                                <?= $actor->genre; ?>
                                            </span>
                                        </p>

                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </li>

                <?php endforeach; ?>

            </ul>
        </div>
    </section>
</main>



<?php
// Questo è il contenuto del footer
include_once __DIR__ . '/components/footer.php';
?>