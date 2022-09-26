<?php
include_once __DIR__ . '/components/movies-array.php';
include_once __DIR__ . '/components/movie.php';

$arr_movies = [];
foreach ($movies as $v) {
    $arr_movies[] = new Movie($v['name'], $v['main_actor'], $v['year'], $v['personage'], $v['poster']);
}

?>

<?php
// Questo è il contenuto del tag <head />
include_once __DIR__ . '/components/head.php';
?>



<main class="mb-8">
    <section>
        <div class="container">
            <ul class="row row-10-xl gap-25">
                <?php foreach ($arr_movies as $v) : ?>
                    <li class="col-6 col-4-md col-3-lg col-2-xl bg-orange-7 border rounded-3 shadow-4-dark p-2 t-center transition-all duration-3 bg-orange-6-H shadow-5-light-H scale-H">
                        <div>
                            <img class="obj-cover w-100 aspect-ratio-1 obj-top" src="<?= $v->poster; ?>" alt="<?= $v->name; ?>">
                        </div>
                        <h2 class="pt-3 pb-3 white"><?= $v->name; ?></h2>
                        <p class="py-1">Pubblicato il <span class="white bold"><?= $v->year; ?></span></p>
                        <h4>Attore principale: <span class="block py-1 white"><?= $v->main_actor; ?></span></h4>
                        <p>nel ruolo di: <span class="block bold py-1 white"><?= $v->personage; ?></span></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>



<?php
// Questo è il contenuto del footer
include_once __DIR__.'/components/footer.php';
?>