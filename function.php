<?php
// new DateTimeZone('Paris/Europe'));
//$date = new DateTime($maDateDansMaBDD,new DateTimeZone('Paris/Europe'));
//<?php $date = DateTime::createFromFormat('d/m',$maDate);
////////////////////Mes tableaux///////////////////////
    $boissons = array("Expresso", "Café long", "Thé");
///////////////////////////////////////////////////////


////////mes Variables/////////////
    $drinks = "";
    $date = date("d,m,Y H:i A");
    $money = 0;
//////////////////////////////////

////////////////////Mes Boucles/////////////////////////
    foreach ($boissons as $boissonsDispo){
        $drinks = $drinks. "<li>$boissonsDispo</li>";
        }
////////////////////////////////////////////////////////

///////////////////////Mes fonctions////////////////////////

//Mes recettes Boissons______________________________________
    function RecetteExpresso($nbsucres) {
        echo "1 eau, 1 café & ". $nbsucres. " sucre(s)";
    }
    function RecetteCafelong($nbsucres) {
        echo "2 * eau, 2 * café & ". $nbsucres. " sucre(s)";
    }
    function RecetteThe($nbsucres) {
        echo "1 eau, 1 Thé & ". $nbsucres. " sucre(s)";
    }
//Ma selection de boisson___________________________________
    function préparerBoisson($boisson, $sucre) {
        if ($boisson == 'expresso') {
            RecetteExpresso($sucre);
        }
    }
//préparerBoisson('expresso', 1);
////////////////////////////////////////////////////////////

 ?>
