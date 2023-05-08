<?php

require'template/database.php';

$supp = $database->prepare("DELETE FROM cours WHERE id= :id");
$supp->execute(
    [
        "id" => $_POST['supp']
    ]
    
);

header("Location: portail-note.php");