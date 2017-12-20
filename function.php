<?php
;
//$date = new DateTime($maDateDansMaBDD,new DateTimeZone('Paris/Europe'));
//<?php $date = DateTime::createFromFormat('d/m',$maDate);

////////////////////Mes tableaux///////////////////////
    $boissons = array("Expresso", "Café long", "Thé");



////////mes Variables/////////////
    $date = date_default_timezone_set('Europe/Paris');
    $drinks = "";
    $date = date("d,m,Y H:i:s A");
    $money = 0;

////////////////////Mes Boucles/////////////////////////
    foreach ($boissons as $boissonsDispo){
        $drinks = $drinks. "<li>$boissonsDispo</li>";
        }


///////////////////////Mes fonctions////////////////////////

//Mes Choix par defaut;


//Mes recettes Boissons______________________________________
    function RecetteExpresso($nbsucres) {
        echo "Vous avez choisi un Expresso composé de 1 eau, 1 café & ". $nbsucres. " sucre(s)";
    }
    function RecetteCafelong($nbsucres) {
        echo "Vous avez choisi un Café long composé de 2 * eau, 2 * café & ". $nbsucres. " sucre(s)";
    }
    function RecetteThe($nbsucres) {
        echo "Vous avez choisi un Thé composé de 1 eau, 1 Thé & ". $nbsucres. " sucre(s)";
    }
//Ma selection de boisson___________________________________
    function preparerBoisson($boisson, $sucre) {
        if ($boisson == 'expresso') {
            RecetteExpresso($sucre);
        } elseif ($boisson == 'the') {
            RecetteThe($sucre);
        } elseif ($boisson == 'cafelong') {
            RecetteCafelong($sucre);
        }
    }

// préparerBoisson('the', 0);


 ?>
