<?php
include_once __DIR__ . '/components/movies.php';
include_once __DIR__ . '/components/movie-class.php';

$arr_movies = [];
foreach ($movies as $v) {
    $arr_movies[] = new Movie($v['name'], $v['main_actor'], $v['year'], $v['personage']);
}

?>

<?php
// Questo è il contenuto del tag <head />
include_once __DIR__ . '/components/head.php';
?>



<main>
    <section>
        <div>
            <ul>
                <?php foreach ($arr_movies as $v) : ?>
                    <li>
                        <?= var_dump($v); ?>
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