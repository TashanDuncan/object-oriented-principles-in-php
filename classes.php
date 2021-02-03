<?php

class  Team
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members= $members;
    }

    public static function start($name, $members = [])
    {
        return new static($name,$members);
    }

}

$dmc =  Team::start('DMC',['Nero','Dante','Vergil']);

var_dump($dmc) ;