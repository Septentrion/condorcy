<html>
    <head></head>
    <body>
        <header></header>
        <main>
            <form method="POST" action="createElection.php">
                <div>
                    <input type="hidden" name="step" id="step" value="1" />
                </div>
                <div>
                    <label for="question">Question</label>
                    <input type="text" name="question" id="question" />
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" />
                </div>
                <div>
                    <label for="question">Type de scrutin</label>
                    <input type="text" name="question" id="question" />
                </div>
                <div>
                    <label for="numOfOptions">Nombre d'options</label>
                    <input type="number" name="numOfOptions" id="numOfOptions" />
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value-"Créer" />
                </div>
            </form>
        </main>
        <footer></footer>
    </body>
</html>
