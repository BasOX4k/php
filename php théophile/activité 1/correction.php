<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Météo</title>
</head>
<body>

  <?php

  $prenom = "Théophile";

  if ($prenom === "Théophile") {
    echo "Bonjour Créateur ! <br>";
  } else {
    echo "Bonjour $prenom ! <br>";
  }

  $tableau = ["Tonie","Elodie","Raphael","Sanaa","Amal","Laurent","Dimitri","Salomé","Aubin","Killian","Bruno","Yoan","Sara","Clément","Rodrigo"];

  $prenom = "Dimitri";

  if (in_array($prenom,$tableau)) {
    echo "Bonjour $prenom ! <br>";
  }else {
    echo "Bonjour bel(le) inconnu(e) <br>";
  }

  echo "<h3>Boucle foreach : </h3>";

  foreach($tableau as $clef => $valeur){
    echo "Bonjour $valeur <br>";
  }

  echo "<h3>Boucle while : </h3>";

  $i = 0;
  while ($i < sizeof($tableau)) {
    echo "Bonjour $tableau[$i] <br>";
    $i ++;
  }

  echo "<h3>Boucle while avec arrêt : </h3>";

  $i = 0;
  while ($tableau[$i] !== "Bruno") {
    echo "Bonjour $tableau[$i] <br>";
    $i ++;
  }

  echo "<h3>Boucle for jusqu'à : </h3>";

  for ($i=0; $i < 5; $i++) {
    echo "Bonjour $tableau[$i] <br>";
  }

  echo "<h3>Boucle for avec arrêt : </h3>";
  for ($i=0; $i < sizeof($tableau); $i++) {
    if ($i > 5) {
      break;
    }
    echo "Bonjour $tableau[$i] <br>";
  }

  echo "<h3>Exercice ZOO : </h3>";
  $animaux = [
    'lion'=>['viande', TRUE],
    'loup'=>['viande', FALSE],
    'tigre'=>['viande', TRUE],
    'panthère'=>['viande', FALSE],
    'éléphant'=>['fourrage', TRUE],
    'girafe'=>['fourrage', FALSE],
    'antilope'=>['fourrage', FALSE],
    'gerbille'=>['graines', TRUE],
    'perroquet'=>['graines', FALSE],
    'paon'=>['graines', FALSE],
  ];

  $validation = FALSE;

  while ($validation !== TRUE) {
    foreach ($animaux as $animal => $infos_animal) {
      if ($infos_animal[1] === TRUE) {
        echo "$animal a déjà mangé <br>";
        $validation = TRUE;
      } else {
        echo "Le gardien s'occupe de $animal <br>";
    // $infos_animal[1] = TRUE; // temporaire
    $animaux[$animal][1] = TRUE; //pérenne
    $validation = FALSE;
  }
}
}



echo "<h3>Exercice TEMPÉRATURE : </h3>";

$mois = [
  'jour 1' => [ 'pluie' => 12,'max' => 12, 'min' => 8],
  'jour 2' => [ 'pluie' => 0,'max' => 25, 'min' => 12],
  'jour 3' => [ 'pluie' => 0,'max' => 30, 'min' => 15],
  'jour 4' => [ 'pluie' => 5,'max' => 20, 'min' => 12],
  'jour 5' => [ 'pluie' => 7,'max' => 17, 'min' => 4],
  'jour 6' => [ 'pluie' => 0,'max' => 25, 'min' => 8],
  'jour 7' => [ 'pluie' => 0,'max' => 30, 'min' => 12],
  'jour 8' => [ 'pluie' => 0,'max' => 35, 'min' => 16],
  'jour 9' => [ 'pluie' => 7,'max' => 20, 'min' => 15],
  'jour 10' => [ 'pluie' => 0,'max' => 18, 'min' => 13],
  'jour 11' => [ 'pluie' => 18,'max' => 7, 'min' => 0],
  'jour 12' => [ 'pluie' => 0,'max' => 15, 'min' => 12],
  'jour 13' => [ 'pluie' => 3,'max' => 17, 'min' => -4],
  'jour 14' => [ 'pluie' => 2,'max' => 18, 'min' => -5],
  'jour 15' => [ 'pluie' => 1,'max' => 19, 'min' => 10],
];


function rendreTemperatureMoyenne(array $mois): float {

  $min = getValues($mois,'min');
  $max = getValues($mois,'max');

  // On met tout ça dans un seul tableau :
  $totalTemp = array_merge($min ,$max);

  // On fait ensuite la somme de toutes les valeurs du tableau
  // Puis on la divise par la longueur du tableau (sizeof())
  $moyenne = array_sum($totalTemp) / sizeof($totalTemp);

  // Enfin on retourne la valeur arrondie à un chiffre après la virgule.
  return round($moyenne, 1);
}

echo 'La température moyenne est de ' . rendreTemperatureMoyenne($mois) . ' °C. <br>';


/**
 * Fonction qui permet de récupérer toutes les valeurs minimum ou maximum de mon tableau mois.
 * @param  array  $mois   le tableau des jours avec leurs stats
 * @param  string $format soit 'max' soit 'min'
 * @return array         un tableau de valeurs récupéré du tableau mois.
 */
function getValues( array $mois, string $format): array {
  if ($format === "min" || $format === "max" || $format === "pluie") {
    foreach($mois as $jour => $stats){
      $resultat[] = $stats[$format];
    }
    return $resultat;
  } else {
    throw new ErrorException("Le format doit être soit 'max', soit 'min'");
  }
}

$min = getValues($mois,'min');
$max = getValues($mois,'max');
$pluie = getValues($mois, 'pluie');

echo 'La température minimum du mois est de ' . min($min) . ' °C. <br>';
echo 'La température maximum du mois est de ' . max($max) . ' °C. <br>';


?>

<h3>Exercice TEMPÉRATURE : Affichage du graphique </h3>
<div id="conteneur">
  <div class="content-legende">
    <p>40mm</p>
    <div id="legende"></div>
  </div>
  <?php
  foreach ($mois as $jour => $stats) { ?>
    <div class="jour">
      <div id="<?= $jour ?>" class="pluie" style="height: <?= $stats['pluie']*5 ?>px; background-color:<?= ($stats['pluie'] === max($pluie)) ? "red" : "blue" ?>"></div>
      <p><?= $jour ?></p>
    </div>
  <?php }


  ?>
</div>

</body>
</html>
