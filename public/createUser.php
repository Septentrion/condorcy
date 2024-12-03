<?php

use App\Condorcy\User;

if (empty($_POST)) {
    require_once "../templates/formUser.html.php";
} else {
    $user = new User(
        username: $_POST['username'], 
        password: $_POST['password']);

    $user->setFirstName($_POST['firstName'])
         ->setLastName($_POST['lastName'])
         ->setEmail($_POST['email']);

    require_once "../templates/profile.html.php"; 
}
?>

<?php

use App\Condorcy\User;

if (empty($_POST)) {
    require_once "../templates/formUser.html.php";
} else {
    $user = new User(
        username: $_POST['username'],
        password: $_POST['password']);

    $user->setFirstName($_POST['firstName'])
         ->setLastName($_POST['lastName'])
         ->setEmail($_POST['email']);

    $sth = $dbh->prepare(...);
    $tsth->execute(...);

    require_once "../templates/profile.html.php";

    $sth = $dbh('SELECT * FROM users WHERE username = ?');
    $user = $sth->execute([$_POST['username']]);

    if (!empty($user)) {
        if (password_verify($_POST['password'], $user[0]['password'])


    $sth = $dbh('SELECT * FROM users WHERE 1');


        $sth = $dbh("
            SELECT * FROM users AS U
            JOIN vote AS V ON U.user_id = V.user_id
            JOIN election AS E ON E.election_id = V.election_id
            WHERE U.username LIKE ? AND V.action = 'ORG'
        ");
        $sth->execute(['edouard']);
    }

~
~
~
~
~
:q
