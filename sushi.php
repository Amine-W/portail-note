<?php

// Créer notre première variable
$name = "susuki";
$user = "Kaaris";   
$localisation = "colombes";
$nav = [
    "Nos menus",
    "Nos disponiblités",
    "Notre restaurant",
];
$menu =  [
    [
        "nom" => "saumon",
        "prix"=> "4 euros",
        "catégorie"=> "sushi",
        'disponibilité' => true,

    ],
    [
        "nom" => "thon",
        "prix"=> "5 euros",
        "catégorie"=> "sushi",
        'disponibilité' => true,

    ],
    [
        "nom" => "daurade",
        "prix"=> "4 euros",
        "catégorie"=> "sashimi",
        'disponibilité' => false,

    ],
    [
        "nom" => "saumon",
        "prix"=> "10 euros",
        "catégorie"=> "sashimi",
        'disponibilité' => true,
    ],
    [
        "nom" => "thon",
        "prix"=> "11 euros",
        "catégorie"=> "sashimi",
        'disponibilité' => true,

    ],
    [
        "nom" => "daurade",
        "prix"=> "10 euros",
        "catégorie"=> "sashimi",
        'disponibilité' => true,

    ],
    [
        "nom" => "boeuf",
        "prix"=> '3 euros',
        "catégorie"=> "brochette",
        'disponibilité' => false,

    ],
    [
        "nom" => "poulet",
        "prix"=> "4 euros",
        "catégorie"=> "brochette",
        'disponibilité' => true,

    ],
   
]

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>susuki</title>
    
        <link rel="stylesheet" href="style.css">

        <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}


body {
    display: grid;
    grid-template-columns: 250px auto;
    height: 100vh;
}

body > * {
    min-height: 100vh;
}

nav {
    color: #000;
    padding: 20px;
    border-right: 3px solid orangered;
}

main {
    background-color: #ebebeb;
}
        </style>
    
           
    </head>

    <body>
    <nav>
    <ul>
        <?php foreach($nav as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
    </nav>
    <main>
        <?php echo "<h1> $name </h1>";
            
            echo " Connecter en tant que: $user" . "<br></br>";
            //echo $_GET['nom'];

        ?>        
        

        <?php   
        
        if($localisation == "courbevoie") {
            echo"Commander en click & collect";
        }
        else {
            echo"Vous ne pouvez pas commander dans votre ville";
        }
        
        ?>


    <?php foreach($menu as $manger) { ?>
        <div>
            <h1><?= $manger['nom'] ?></h1>
            <p class="manger-prix"><?= $manger['prix'] ?></p>
            <p class="manger-catégorie">Catégorie : <?= $manger['catégorie'] ?></p>
        
            <?php if ($manger['disponibilité']) { ?>
            
                <p class="manger-disponible">Disponible</p>
            <?php } else { ?>
                <p class="manger-non-disponible">Non disponible</p>
            
                <?php } ?>
        </div>
    
    <?php } ?>

       

</main>
</body>
</html>





