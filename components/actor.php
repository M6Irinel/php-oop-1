<?php
class Actor
{
    public $name;
    public $role;
    public $genre;

    function __construct($name, $role = '', $genre = '')
    {
        $this->name = $name;
        $this->role = $role;
        $this->genre = $genre;
    }
}