<?php
session_start();

/*
 * Méthodes HTTP
GET
POST
PATCH
PUT
DELETE
HEAD
OPTION
 */

var_dump($_SERVER['REQUEST_METHOD']);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once(__DIR__ . '/../templates/formElection.html.php');
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['step'] === '1') {
    $numberOfOptions = $_POST['numOfOptions']; 
    $_SESSION['electionData'] = $_POST;
    $sql = "
        INSERT INTO election 
        ('question', 'description', 'method')
        VALUES
        ( ? , ? , ?);
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['question'],$_POST['description'], $_POST['method']);
    $_SESSION['electionId']  = $pdo->lastInsertId();
    require_once(__DIR__ . '/../templates/formElectionOptions.html.php');
} else {
    // Traiter le formulaire
    $sql = "
        INSERT INTO option 
        ('text', 'election_*id')
        VALUES
        ( ? , ? );
    ";
    $stmt->execute([$_POST['option'][$i],$_SESSION['electionId']);
}
