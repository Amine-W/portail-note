<?php 

$courses = [
    "Connaître son environnement" => [
        [
            "name" => "IA et réseau de neurones",
            "mark" => 17,
            "average" => 17.67,
        ],
        [
            "name" => "Stratégie d'entreprise (STD) ",
            "mark" => 0,
            "average" => 14,
            "comment" => " le cas marmiton aurait pu être un peu plus développé"
        ],
        [
            "name" => "Management à l'heure du digital ",
            "mark" => 15,
            "average" => 14.92,
        ],
        [
            "name" => "Business Plan ",
            "mark" => 19,
            "average" => 14.96,
            "comment" => "Félicitations vous avez dépassé amplement les consignes qui étaient demandées et avez réalisé un dossier qui tient la route en peu de temps. Bien sûr quelques élements sont encore manquants mais le travail réalisé est remarquable. Très bonne partie juridique, bien pensée et creusée. Bien aussi d'avoir pensé à la partie assurance, indispensable dans votre activité ! La partie 'risques' est canon, très bien réalisée ! Vous pourrez penser à retravailler les personas pour les étoffer (hors consignes)"
        ],
    ]
]


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le portail</title>
    <link rel="stylesheet" href="albus.css">
</head>
<body>
    <div class="title">
        <h1>Année 5 - Management de la transformation digitale</h1>
    </div>
    <section>
    <?php foreach($courses as $key => $marks) { ?>
        <h2><?= $key ?></h2>
        <?php foreach($marks as $mark) { ?>
        <?php
            if($mark['mark'] == 0) {
                $color = " red";
            } else if($mark['mark'] < 10) {
                $color = " orange";
            } else {
                $color = "";
            }
        ?>    
        <div class="course-mark">
            <div class="course-mark-info">
                <div>
                    <p class="course-mark-name"><?= $mark['name'] ?></p>
                    <p class="course-mark-average">Moyenne de promo : <?= $mark['average'] ?></p>
                </div>
                <div class="mark<?= $color ?>">
                    <p><?= $mark['mark'] ?> / 20</p>
                </div>
            </div>
            <?php if(isset($mark['comment'])) { ?>
            <div class="course-mark-comment">
                <p>"<?= $mark['comment'] ?>"</p>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    <?php } ?>
    </section>

</body>
</html>