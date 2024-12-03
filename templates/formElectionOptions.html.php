<html>
    <head></head>
    <body>
        <header></header>
        <main>
            <form>
                <div>
                    <input type="hidden" name="step" id="step" value="2" />
                </div>
               <?php
                      $i = 1; echo $i;
                   I  foreach (range(1, $numberOfOptions) as $i) {
                ?> 
               <div>
                    <label for="option[]">Option <?= $i ?> </label>
                    <input type="text" name="option[]" id="option[]" />
                </div>
                <?php
                 }
                ?>
                <div>
                    <input type="submit" name="submit" id="submit" value-"Créer les options" />
                </div>
            </form>
        </main>
        <footer></footer>
    </body>
</html>
