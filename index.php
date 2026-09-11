<?php

require_once('Classe/Animal.php');
require_once('Classe/Pet.php');
require_once('Classe/Owner.php');

$owner1 = new Owner('Jacob', '123 rue Principale', 'J6E 1A1', '514-555-0199', 'jacob@courriel.com');
$pet1 = new Pet();
$pet1->setProp('Rex', '2020-05-15', 'Dog');

$owner2 = new Owner('Marie', '45 av. des Pins', 'H2X 2K3', '450-555-0142', 'marie@courriel.com');
$pet2 = new Pet();
$pet2->setProp('Minou', '2019-03-10', 'Cat');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Clinique vétérinaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Clinique vétérinaire</h1>

    <div class="carte">
        <div class="proprio">
            <h2>Propriétaire</h2>
            <?php echo $owner1->getProp(); ?>
        </div>
        <div class="animal">
            <h2>Animal</h2>
            <?php echo $pet1->getProp(); ?>
        </div>
    </div>

    <div class="carte">
        <div class="proprio">
            <h2>Propriétaire</h2>
            <?php echo $owner2->getProp(); ?>
        </div>
        <div class="animal">
            <h2>Animal</h2>
            <?php echo $pet2->getProp(); ?>
        </div>
    </div>

</body>
</html>