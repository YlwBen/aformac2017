<!-- Exercice 1 -->

<?php
// if (empty($_POST["mail"]))
// {
//   echo "E-mail invalide. ";
//
// }else
// {
//   echo "Email valide, merci. ";
// }
//
// if (empty($_POST["checkb"]))
// {
//   echo "Checkbox invalide ";
//
// }else
// {
//   echo "Checkbox valide, merci. ";
// }
?>

<!-- Exercice 2  -->

<?php

$champs = array (
    'Mail' => $_POST["Mail"],
    'Nom' => $_POST["Nom"],
    'Prenom' => $_POST["Prenom"],
    'Adresse' => $_POST["Adresse"],
    'Age' => $_POST["Age"],
    'Telephone' => $_POST["Telephone"]
  );

foreach ($champs as $key => $value) {
  if ($value == "") {
    echo "$key non rempli. </br>";
  }else{
    echo "$key prit en compte. </br>";
  }
}

 ?>
