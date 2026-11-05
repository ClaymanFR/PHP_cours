<!--   1) et 2)
<?php
    echo "Bonjour ".$_GET['prenom']." ".$_GET['nom'];

?> -->

<br><br>

<?php


    if (isset($_POST['prenom']) && isset($_POST['nom'])) {
        echo "Bonjour " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']);
    } else {
        echo 'Erreur dans les données saisies.';
    }

?>

<br><br>

<?php


    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['sexe'])) {
        echo "Bonjour " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']) . ", vous avez " . intval($_POST['age']) . " ans et vous êtes " . htmlspecialchars($_POST['sexe']) . ".";
    } else {
        echo 'Erreur dans les données saisies.';
    }

?>