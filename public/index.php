<?php
require __DIR__ . '/../vendor/autoload.php';

use TpClassCat\Animal;

// Instance via une namespace -> "use TpClassCat\Animal;"
$chat = new Animal();
$chat->setName("FeliX");
$chat->gender = "male";

// Instance via le namespace directement
$chat2 = new \TpClassCat\Animal();
$chat2->setName("Minette");
$chat2->gender = "femelle";

// Utilisation d'un attribut de type "protected" via une objet fille -> mere
$chat3 = new \TpClassCat\Cat();
$chat3->setName("Garfied");
$chat3->setAge(75);

// Tableau d'objet
$tabCat = array($chat, $chat2, $chat3);

// ----------------------------------
echo "<br></br>WHILE <br>";
$depart = 0;
$fin = count($tabCat);
while ($depart < $fin) {
    echo $tabCat[$depart]->getName() . "<br>";
    $depart = $depart + 1;
}

// ----------------------------------
echo "<br></br>For <br>";
for ($departFor = 0; $departFor < count($tabCat); $departFor++) {
    echo $tabCat[$departFor]->getName() . "<br>";
}

// ----------------------------------
echo "<br></br>Foreach <br>";
foreach ($tabCat as $cat) {
    echo $cat->getName() . "<br>";
}

// ----------------------------------
// Phase de debug
echo "<pre>";
var_dump($tabCat);
echo "</pre>";