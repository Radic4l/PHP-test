<?php
    header("Refresh:60");
    include "function.php";
 ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/style.css">
        <meta charset="utf-8">
        <title>Coffe Machine</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="Date">
                        <h1>Date</h1>
                        <?= $date; ?>
                    </div>
                </div>
                <div class="col-sm-6 interface">
                    <h1><i>Les Boissons disponibles</i></h1>
                    <ul>
                    <b>
                    <?= $drinks; ?><br><br>
                    <?= RecetteExpresso(1); ?><br />
                    <?= RecetteCafelong(2); ?><br />
                    <?= RecetteThe(3); ?><br />
                    </b>
                    </ul><br><br>
                    <?= "<br /><b>En attente ...</b><br />"; ?>
                    <form action="préparerBoisson.php" method="post">
                        <h3>Choix Boissons</h3>
                        <label>Thé : <input type="radio" name="Boisson" value="the"></label><br><br>
                        <label>Expresso : <input type="radio" name="Boisson" value="expresso"></label><br><br>
                        <label>Café Long : <input type="radio" name="Boisson" value="cafelong"></label><br><br>
                        <input type="submit">
                    </form>
                </div>
                <div class="col-sm-3">
                    <div class="Money">
                        <h1>Monnaie insérée</h1>
                        <?= $money ?>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
