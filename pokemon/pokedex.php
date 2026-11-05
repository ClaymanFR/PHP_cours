<?php
$data = json_decode(file_get_contents('pokemon.json'));
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="pokedex.css">
</head>
<body>
    <div class="container">
        <?php foreach ($data as $pokemon) {
            if ($pokemon->types === null) continue; // Pkemon Bug
            $type = $pokemon->types[0]->name;
        ?>

            <div class="pokemon <?= $type ?>">
                <div class="image-container">
                    <img src="<?= $pokemon->sprites->regular ?>" alt="<?= $pokemon->name->fr ?>" >
                    <p class="type"><?= $type ?></p>
                </div>
                <h1><?= $pokemon->name->fr ?></h1>
                <ul>
                    <li>Points de vie: <?= $pokemon->stats->hp ?></li>
                    <li>Attaque: <?= $pokemon->stats->atk ?></li>
                    <li>Défense: <?= $pokemon->stats->def ?></li>
                    <li>Attaque Spéciale: <?= $pokemon->stats->spe_atk ?></li>
                    <li>Vitesse: <?= $pokemon->stats->vit ?></li>
                </ul>
            </div>

        <?php } ?>
    </div>
</body>
</html>