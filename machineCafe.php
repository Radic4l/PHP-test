<?php
    header("Refresh:1");
    include "function.php";
    $boisson;
    $sucre;
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
                    <?= RecetteExpresso(1); ?><br /> <!-- delete -->
                    <?= RecetteCafelong(2); ?><br /> <!-- delete -->
                    <?= RecetteThe(3); ?><br /> <!-- delete -->
                    </b>
                    </ul><br><br>
                    <?= "<br /><b>En attente ...</b><br />"; ?>
                    <form action="machineCafe.php" method="POST">
                        <h3>Choix Boissons</h3>
                        <label>Thé : <input type="radio" name="Boisson" value="the"></label><br><br>
                        <label>Expresso : <input type="radio" name="Boisson" value="expresso"></label><br><br>
                        <label>Café Long : <input type="radio" name="Boisson" value="cafelong"></label><br><br>
                        <p>Choix Sucre :</p>
                        <label> 0 <input type="radio" name="nbSucre" value="0"></label>
                        <label> 1 <input type="radio" name="nbSucre" value="1"></label>
                        <label> 2 <input type="radio" name="nbSucre" value="2"></label>
                        <label> 3 <input type="radio" name="nbSucre" value="3"></label>
                        <label> 4 <input type="radio" name="nbSucre" value="4"></label>
                        <label> 5 <input type="radio" name="nbSucre" value="5"></label><br><br><br>
                        <input type="submit"><br><br>
                    </form>
                    <div class="Commande">
                        <?php if (isset($_POST['Boisson']) && isset ($_POST['nbSucre'])) {
                            preparerBoisson($_POST['Boisson'],$_POST['nbSucre']);
                        } else {
                            echo "En attente de choix.";
                        } ?>
                    </div>
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
