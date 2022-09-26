<?php

class Movie
{
    public $name;
    public $main_actor;
    public $year;
    public $personage;
    public $poster;
    
    function __construct($name, $main_actor, $year, $personage, $poster)
    {
        $this->name = $name;
        $this->main_actor = $main_actor;
        $this->year = $year;
        $this->personage = $personage;
        $this->havePoster($poster);
    }

    public function havePoster($poster){
        if($poster != ''){
            $this->poster = $poster;
        }else {
            $this->poster = 'https://demofree.sirv.com/nope-not-here.jpg';
        }
    }
}
