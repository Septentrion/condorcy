<?php

namespace App\Framework;

class Router
{

    public function __construct()
    {
        $controllerFolder = $_SERVER['DOCUMENT_ROOT'] . '/scr/Controller';
        if (!is_dir($controllerFolder) {
            throw new \Exception("Aucun dossier pour les contrôleurs n'a été trouvé";
        }

        if ($dh = opendir($controllerFolder)) {
            foreach (glob("*Controller.php") as $filename) {
                echo "$filename occupe " . filesize($filename) . "\n";
                require_once($filename);
            }
        }
        closedir($dh);
    }

    }

    public function collectRoutes()
    {
    }

    public function findRoute(string $url): array
    {
    } 
}
