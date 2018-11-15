<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $age = 19;
     settype($age, "integer");

  //settype definir le type de variable

  if ($age >= 18)
 {
    echo "Tu es majeur !!!";
 }
 // sinon si votre age est superieur ou egal a 18 alors vous etes majeur
 else
 {
    echo "Tu n'est pas majeur !!!";
 }
 // sinon vous n'avez pas du rentré votre age car la variable ne contient pas de nombre
 ?>
</body>
</html>
