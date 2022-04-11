<?php

namespace TpClassCat;

class Animal
{
    private $name;
    public $gender;
    protected $age;
    public $weight;
    public $color;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = strtolower($name);
    }

}