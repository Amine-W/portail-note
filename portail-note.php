<?php

require "template/database.php";

//etape 1 préparation   
$requete = $database->prepare("SELECT * FROM cours");
//etape 2  exécuition
$requete->execute(); 
//etape 3 utilisation
$cour = $requete->fetchALL(PDO::FETCH_ASSOC);

//echo "<pre>";
//var_dump($cour);
//echo "</pre>";


$coursDev= [
    "Intro aux algos",
    "HTML / CSS / Mise en ligne",
    "Javascript",
    "PHP / MySQL",
    "Data & IOT",
];

$coursAvecNotes =  [
    [
        "nom" => "HTML/CSS",
        "note"=> 18,
        "moyenne"=> 15

    ],
    [
        "nom" => "Javascsrpit",
        "note" => 7,
        "moyenne" => 9
    ]
]
// var_dump($coursDev); Console.log du JS

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require"template/navigation.php";  ?>
    <main>
        <!-- bien mais chiant
        <ul>
            <li><?php echo $coursDev[0];?></li>
            <li><?php echo $coursDev[1];?></li>
            <li><?php echo $coursDev[2];?></li>
            <li><?php echo $coursDev[3];?></li>
        </ul>
        -->
        
        <form class="form" method="POST" action="insert.php">

            <input type="text" name="cours" placeholder="Matière" Required/>
            <input type="text" name = "enseignant" placeholder="Enseignant-e"/>
            <input type="number" name="note" placeholder="Note" min="0" max="20"/>
            
            <button type ="submit"> Ajouter </button>
        
        </form>
        <hr>
        <!-- bien mieux -->

        <!--<ul>
        <?php
            foreach($coursDev as $cours) {
                echo "<li>$cours</li>";
            }
            ?>
        </ul>-->


        <!--<?php
            foreach($coursAvecNotes as $cours){ 
                echo "<div>";
                echo"<h1>" . $cours['nom'] . "</h1>";
                echo"<p>" . $cours['note'] . "</p>";
                echo"<p>Moyenne de la promo : " . $cours ['moyenne'] . "</p>";           
                echo"<div>";
            }
        ?>-->

        <!--<?php  foreach($coursAvecNotes as $cours) { ?>
            
            <div>
                <h1><?= $cours['nom'] ?></h1>
                <p class ="cours-note"><?= $cours['note'] ?></p>
                <p class ="cours-moyenne">Moyenne de la promo : <?= $cours['moyenne'] ?></p>
            </div>
        <?php } ?>-->

        <?php foreach ($cour as $course) { ?>
            <h1><?= $course['nom'] ?></h1>
            <p>Enseignant-e : <?= $course['enseignant'] ?></p>
            <p>Ma note : <?= $course['note'] ?></p>
        
        <form action="delete.php" method="POST">
            <input type="hidden" name="supp" value="<?= $course['id'] ?>">
            <button type="submit"> Supprimer </button>
        </form>
        <?php } ?>


    </main>
</body>
</html>