<?php

namespace App\Condorcy\DBAL;

/**
 * Classe de connexion à la base de données
 *
 * Cette classe est l'iumplémentation du « design pattern » Singleton.
 * Un singleton est une classe qui ne produit qu'une seule instance.
 * Ainsi cette instance n'est pas créée par un constructeur; mais par une méthode spéciale, ici appelée `create`
 * De plus, le constructeur est rencu __privé__, ce qui interdit l'utilisation de l'opérateur  `new`.
 */
class Connector {

    private static \PDO $dbConnector = null;

    /**
     * Constructeur de la classe.
     * La méthode étant `private`, elle ne peut être exécutée en dehors de la classe elle-même.
     * Cela interdit de faire :
     *
     * $dbh = new Connector()
     */
    private function __construct() {}

    /**
     * Méthode de création d'une instance de Connector.
     * Le cmot-celf `static` indique que c'est une __méthode de classe__, qui s'utilise ainsi :
     *
     * $dbh = Connector::create()
     *
     * Si une instance existe déjà, une autre n'est jamais créée et la première est toujours retournée.
     *
     * @return \PDO
     */
    public static function create(): \PDO
    {
        if (is_null(self::$dbConnector)) {
            /**
             * file_get_contents : lit le contenu d'un fichier
             * json_decode : transforme un chaîne au format JSON en tableau PHP
             */
            $data = json_decode(file_get_contents(__DIR__ . "/../../config/database.json"), true);

            /**
             * try : structure de contrôle qui permet de gérer les erreurs.
             * Si la connexion à la base de données est impossible, alors une exception est « levée ».
             * Celle-ci pourra être à son tour interceptée pour éviter que le programme ne s'arrête brutalement.
             * En cas d'erreur, c'est la branche `catch` qui est exécutée.
             */
            try {
                self::$dbConnnector = new \PDO($data['dsn'], $data['user'], $data['password']);
            } catch (\Exception $e) {
                throw $e;
            }
        }
        
        return self::$dbConnector;
    }
