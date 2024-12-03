<?php

session_start();

require_once __DIR__ . "/../vendor/autoload.php";

//use App\Condorcy\ClassA;
//use App\Condorcy\ClassB;
use App\Condorcy\User

//$a = new ClassA(x:10);
//$b = new ClassA(x:100);
//$c = new ClassB();
/*
$result = $a->f(36);
echo $result;
$result2 = $c->f(36);
echo $result2;
 */

$user = new User(username: "m.cadennes", password: "montreuil");

$user->setFirstName("Michel")
     ->setLastName("Cadennes")
     ->setEmail("michel.cadennes@sens-commun.fr");

require_once "../templates/profile.html.php";

SELECT * 
FROM election 
WHERE closing_date > NOW()

SELECT *
FROM option
WHERE election_id = 25

SELECT *
FROM election
JOIN option ON election.id = option.election_id
JOIN vote ON election.id = vote.election_id


