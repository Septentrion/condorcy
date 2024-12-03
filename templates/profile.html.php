<html>
    <head>
    </head>
    <body>
        <header>
            <h1>
                Profil de <?= "$user->getFirstName() $user->getLastName()" ?>
</h1>
        </header>
        <main>
            <p>
                <span> Identifiant : </span>
                <span><?php echo $user->getUsername() ?></span>
            </p>
        </main>
    </body>
</html>
