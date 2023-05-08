<?php

// Créer notre première variable
$name = "Amine Wahab";
$promo = 2012;

// 1ère façon de print
echo "<h1>";
echo $name;
echo "</h1>";
echo "<p>- Promo";
echo $promo;
echo "</p>";

// Concaténation
echo"<h1>" . $name . " - Promo" . $promo . "</h1>";

// Double guillemet " "
echo "<h1>$name - Promo $promo </h1>";

//Récupération info de l'URL
//suppose localhost/index.php?nom=valeur
echo $_GET['nom'];

if($promo >= 2023) {
    echo "Je suis un étudiant·e";
}
else {
    echo "Je suis un alumni";
}

echo date('Y');


?>