<?php
include_once __DIR__.'/actor.php';

function addNewActor($array_movies, $index_movie , $newName, $newRole, $genre)
{
    $array_movies[$index_movie]->addActor(new Actor($newName, $newRole, $genre));
}

function removeActor($array_movies, $index_movie , $name)
{
    $array_movies[$index_movie]->removeActor(new Actor($name));
}