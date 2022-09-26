<?php
class Actor
{
    public $name;
    public $last_name;
    public $age = 5;
    public $role;

    function __construct($name, $last_name, $role, $age = 5)
    {
        $this->$name = $name;
        $this->$last_name = $last_name;
        $this->controlAge($age);
        $this->$role = $role;
    }

    function controlAge($age)
    {
        if ($age >= 5) {
            $this->age = $age;
        }
    }
}
