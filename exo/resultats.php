<!--   1) et 2)
<?php
    echo "Bonjour ".$_GET['prenom']." ".$_GET['nom'];

?> -->

<?php


    if (isset($_POST['prenom']) && isset($_POST['nom'])) {
        echo "Bonjour " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']);
    } else {
        echo 'Erreur dans les données saisies.';
    }

?>