 <?php
   // Afficher les erreurs à l'écran
   ini_set('display_errors', 1);
   // Afficher les erreurs et les avertissements
   error_reporting(E_ALL);
   ob_start();
   ?>

 <h1>Exercices - Les boucles</h1>
 <h2>Exercice 1 :</h2>
 <p>
    Le but de l'exercice est de faire un décompte pour souhaiter la bonne année ! <br>
    Le résultat attendu est le suivant : <br />
    5! <br />
    4! <br />
    3! <br />
    2! <br />
    1! <br />
    BONNE ANNÉE !!! <br /><br />

    1) Faire afficher le message souhaité sans l'utilisation de boucles
    2) Faire afficher le message souhaité grâce à la boucle WHILE
    3) Faire la même boucle mais avec un FOR
 </p>

 <strong>Résultat :</strong>

 <?php
   // Votre code ici
   echo "<p>5!<br>4!<br>3!<br>2!<br>1!<br>BONNE ANNÉE !!!</p>";

   $i = 5;
   while ($i > 0) {
       echo $i."!" . "<br>";
       $i--;
   } 

   if ($i == 0) {
       echo "<p>BONNE ANNÉE !!!</p>";
   }

  for ($i = 5; $i > 0; $i--) {
       echo $i."!" . "<br>";
  } 

  if ($i == 0) {
    echo "<p>BONNE ANNÉE !!!</p>";
  }
   ?>


 <h2>Exercice 2 :</h2>
 <p>
    Faire un programme qui permet de calculer la somme des X premiers nombres<br>
    Pour cela, il faudra créer une variable <code>$x</code> et une variable <code>$somme</code> et bien évidemment une boucle !<br>

    1) Faire afficher le message suivant :<br>
    1 + 2 + 3 + 4 + 5 + 6 + ... + <code>$x</code><br>

    2) Faire en sorte d'afficher la même phrase que le 1) mais avec le résultat de cette somme :<br>
    1 + 2 + 3 + 4 + 5 + 6 + ... + <code>$x</code> = <code>$somme</code>
 </p>

 <strong>Résultat :</strong>

 <?php

   // CODE HERE
  $x = 10;
  $somme = 0;

  echo "<br>";

  for ($i = 1; $i <= $x; $i++) {
       if ($i < $x) {
           echo $i . " + ";
       } else {
           echo $i;
       }
   }

   echo "<br>";


  for ($i = 1; $i <= $x; $i++) {
       $somme += $i;
       if ($i < $x) {
           echo $i . " + ";
       } else {
           echo $i . " = " . $somme;
       }
   }

   ?>

 <h2>Exercice 3 :</h2>
 <p>
    Le but du programme suivant sera de faire afficher la table de multiplication des chiffres 1 à 3, il faudra alors utliser une boucle dans une boucle !<br>
    Le résultat attendu sera par exemple : <br>
    1*1 = 1<br>
    1*2 = 2<br>
    etc 1*(3...9) = ...<br>
    1*9 = 9<br>
    2*1= 2<br>
    2*2= 4<br>
    etc 2*(3...9) = ...<br>
    3*1= 3<br>
    3*2= 6<br>
    etc 3*(3...9) = ...<br>

 </p>

 <strong>Résultat :</strong>

  <!-- <?php

   

   $i = 1;
   $j = 1;

   echo "<br>";
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
        } echo "<br>";
    }

   ?>  -->

  <div class="container">
    <div>
      <p>Table de 1</p>
      <?php
        $i = 1;
        $j = 1;

        echo "<br>";
          for ($i = 1; $i <= 1; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 2</p>
      <?php
        $i = 2;
        $j = 1;

        echo "<br>";
          for ($i = 2; $i <= 2; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 3</p>
      <?php
        $i = 3;
        $j = 1;

        echo "<br>";
          for ($i = 3; $i <= 3; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 4</p>
      <?php
        $i = 4;
        $j = 1;

        echo "<br>";
          for ($i = 4; $i <= 4; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 5</p>
      <?php
        $i = 5;
        $j = 1;

        echo "<br>";
          for ($i = 5; $i <= 5; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 6</p>
      <?php
        $i = 6;
        $j = 1;

        echo "<br>";
          for ($i = 6; $i <= 6; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 7</p>
      <?php
        $i = 7;
        $j = 1;

        echo "<br>";
          for ($i = 7; $i <= 7; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 8</p>
      <?php
        $i = 8;
        $j = 1;

        echo "<br>";
          for ($i = 8; $i <= 8; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 9</p>
      <?php
        $i = 9;
        $j = 1;

        echo "<br>";
          for ($i = 9; $i <= 9; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>

    <div>
      <p>Table de 10</p>
      <?php
        $i = 10;
        $j = 1;

        echo "<br>";
          for ($i = 10; $i <= 10; $i++) {
              for ($j = 1; $j <= 10; $j++) {
                  echo $i . " * " . $j . " = " . ($i * $j) . "<br>";
              } echo "<br>";
          }

        ?>
    </div>
    
  </div>

<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between
  }

  .container div {
    border: 3px solid #000000;
    border-radius: 5px;
    width: 17%;
    text-align: center;
    margin-bottom: 5%;
  }

  .container div p {
    border-bottom: 2px solid #000000;
    margin: 0;
  }
</style>

 <?php $content = ob_get_clean(); ?>

 <?php require('../inc/template.php'); ?>