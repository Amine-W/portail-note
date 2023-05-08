<h1>Mon formulaire</h1>

<ul>
    <li>
        <?= $_POST['cours'] ?>
    </li>
    <li>
        <?= $_POST['enseigant'] ?>
    </li>
    <li>
        <?= $_POST['note'] ?>
    </li>
</ul>


<?php

require "template/database.php";

$insert = $database -> prepare("INSERT INTO cours (nom, enseignant, note) VALUES (:course, :teacher, :grade)");
$insert-> execute(
    [
        "course" => $_POST['cours'],
        "teacher" => $_POST['enseignant'],
        "grade" => $_POST['note']
    ]

    );

header("Location: portail-note.php");
