<?php
$name = "Alexis";
$promo = "2019";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Cours</title>
</head>
<body>
    <h1>
        <?php echo $name; ?> - Promo <?php echo $promo; ?>
    </h1>
    <form action="">
        <input value="<?php echo $_GET['search']; ?>" type="search" name="search" id="" placeholder="Rechercher">
        <button type="submit">Rechercher</button>
    </form>
    <?php 
    echo "Vous avez recherché : " . $_GET['search'];
    ?>
</body>
</html>