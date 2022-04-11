<?php

namespace TpClassCat;

class Cat extends Animal
{
    private $isNasty;

    public function meow()
    {
        
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getAge() {
        return $this->age;
    }
}