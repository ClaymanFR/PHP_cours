<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Afficher les erreurs et les avertissements
error_reporting(E_ALL);
ob_start();
?>

<h1>Exercices - Les fonctions</h1>
<h2>Exercice 1 :</h2>
<p>Reprendre le code du l'exercice 3 sur les parties des boucles.</p>

<ol>
    <li>Faire en sorte de créer une fonction <strong>afficherTable</strong>() qui permet d'afficher la table de multiplication jusqu'à 3 comme dans <strong>l'énnoncé initial</strong>. Par contre, améliorer l'affichage en se basant sur ce modèle :<a href="https://www.memozor.com/images/multiplication/tables_a_imprimer/toutes_les_tables/zoom/toutes_les_tables_de_multiplication_noir_et_blanc.jpg">https://www.memozor.com/images/multiplication/tables_a_imprimer/toutes_les_tables/zoom/toutes_les_tables_de_multiplication_noir_et_blanc.jpg</a></li>
    <li>Créer un <strong>paramètre </strong>(<strong>n</strong>) pour que la table de multiplication affiche jusqu'à; la table (n) inclus. Le n va remplacer la limite de 3 écrit en dur.</li>
    <li>Ajouter 2 paramètres (<strong>min)</strong>qui est égale par défaut à; 1 et un autre (<strong>max)</strong>qui est égale par défaut à; 9. En soit la table va commencer par 1 x (min) .... 1 x (max) jusqu'à; n x (max)</li>
    <li>Maintenant <strong>tenter </strong>différentes min, max et n selon les paramètres que vous souhaitez</li>
</ol>

<?php

// Votre code ici

function afficherTable(int $n = 3, int $min = 1, int $max = 9): void{
    echo "<div class=\"tables\">";
    for ($i = 1; $i <= $n; $i++) {
        echo "<table class=\"table-mult\">";
        echo "<caption>Table de $i</caption>";
        for ($j = $min; $j <= $max; $j++) {
            echo "<tr>";
            echo "<td class=\"op\">$i &times; $j</td>";
            echo "<td class=\"egal\">=</td>";
            echo "<td class=\"res\">" . ($i * $j) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "</div>";
}

?>

<style>
    .tables {
        display: flex;
        gap: 20px;
    }

    .table-mult {
        width: 200px;
        border: 3px solid #000;
        border-radius: 0 0 5px 5px;
    }

    caption {
        font-weight: bold;
        border: 3px solid #000;
        border-bottom: none;
        border-radius: 5px 5px 0 0;
    }

    tbody {
        margin: 10%;
    }

    td {
        padding: 0;
        text-align: center;
    }

    td:fi

    .res {
        text-align: left;
    }
</style>


    <?php afficherTable(3, 0, 12); ?>



<h2>Exercice 2 :</h2>
<ol>
    <li>Créer une nouvelle fonction qui s'appelle <strong>estPair </strong>et qui prend en paramètre un nombre (<strong>n</strong>). Cette fonction permet de contrôler si le nombre n est <strong>pair ou pas</strong>, elle doit <strong>retourner vrai </strong>ou <strong>faux </strong>!<br />
        Puis grâce à; l'appel de la fonction, affichez soit la phrase (n) est pair ou (n) est impair<br />
        Pour s'aider, vous pouvez utiliser les modulos <a href="https://www.php.net/manual/fr/language.operators.arithmetic.php">https://www.php.net/manual/fr/language.operators.arithmetic.php</a>ou la fonctions fmod<a href="https://www.php.net/manual/fr/function.fmod.php">https://www.php.net/manual/fr/function.fmod.php</a></li>
    <li>Maintenant ajouter le <strong>typage</strong> sur les paramètres et sur le retour de la fonction</li>
</ol>


<?php
    // Votre code ici

    function estPair(int $n): bool {
        return $n % 2 === 0;
    }

    echo "<p>Le nombre 4 est " . (estPair(4) ? "pair" : "impair") . "</p>";
    echo "<p>Le nombre 7 est " . (estPair(7) ? "pair" : "impair") . "</p>";

?>

<?php $content = ob_get_clean(); ?>

<?php require('../inc/template.php'); ?>