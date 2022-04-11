# TP-class-Cat

TP pour expliquer l'objet en PHP via l'autoload (composer)

## Installation du projet 

### Prérequis

  | Version | Service                                                             | DESCRIPTION |
  |:--------|:------------|:---------------------------------|
  | ^8.0    | PHP Engine                                                          | Runtine     |  
  | ^2.0    | Composer                                         | Dependency Manager             |

## Résumé du cours

Initialisation du projet via composer
````
composer init
````

Changer la ligne dans composer.json -> autoload
````
    "autoload": {
        "psr-4": {
            "TpClassCat\\": "src/"
        }
    },
````

Creation des classes dans le dossier "/src" \

Une fois les class crées, passez la commande composer autoload
````
composer dump-autoload
````

Création d'un dossier "/public" \
Création d'un fichier "index.php" et mettre dans le fichier :

````
<?php
require __DIR__ . '/../vendor/autoload.php';

````

Démarrer le serveur
````
php -S localhost:9000 -t public
````

Allez sur [http://localhost:9000](http://localhost:9000)