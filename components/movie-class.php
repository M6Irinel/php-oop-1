<?php

class Movie
{
    public $name;
    public $main_actor;
    public $year;
    public $personage;

    function __construct($name, $main_actor, $year, $personage)
    {
        $this->name = $name;
        $this->main_actor = $main_actor;
        $this->year = $year;
        $this->personage = $personage;
    }
}
