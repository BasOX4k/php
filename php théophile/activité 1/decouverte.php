<?php


$prenom = "Jean-Claude";
$prenoms = ["Salomé", "Yoan", "Sara", "Clément", "Rodrigo"];

const DEFINED_PRENOM = "vrai";
define('MA_CONST', 'valeur');

var_dump($prenoms);

if(MA_CONST === "valeur"){
  echo "<h1>Je m'appelle $prenom</h1>";
}

foreach($prenoms as $index => $prenom){
  echo "Bonjour $prenom !<br>";
}

for ($i=0; $i < sizeof($prenoms) ; $i++) {
  echo "rebonjour $prenoms[$i] !<br>";
}

$i = 0;
while ($i <= 10) {
  echo $i . '<br>';
  echo "$i <br>";
  $i ++;
}

$prenom = "Jean-Claude";

switch ($prenom) {
  case "Jean-Claude":
    echo 'Salut Bro <br>';
    break;

  default:
    echo "Bonjour Bel(le) inconnu(e) :) <br>";
    break;
}

function bonjour($prenom){
  echo "Bonjour $prenom ! <br>";
}

bonjour('Alice');


$nom = (string) "Dupont";

$age = (int) '25';
$age = (array) $age;
var_dump($age);

if(is_string($nom)){
  echo "la variable nom qui contient $nom est une string";
}


/**
 * Fonction qui retourne l'age en fonction de l'année de naissance
 *
 * @param integer $annee année de naissance
 * @return integer l'age calculé
 */
function calcul_age( $annee): int {
  $dateNow = 2024;
  $age = $dateNow - $annee;

  return $age;
}

$age = calcul_age(1990);
echo "vous avez $age ans.";


// int = entier
// float = nombre à virgule
// string = chaine de caractère
// bool = booléen 0 ou 1
// array = tableau
// void = rien

$apprenants = [
  "apprenant 1" => [
    "prenom" => "Tonie",
    "age" => null
  ],
  "apprenant 2" => [
    "prenom" => "Elodie",
    "age" => null
  ],
  "apprenant 3" => [
    "prenom" => "Raphael",
    "age" => null
  ],
  "apprenant 4" => [
    "prenom" => "Sanaa",
    "age" => null
  ],
  "apprenant 5" => [
    "prenom" => "Amal",
    "age" => null
  ],
];

var_dump($apprenants);

echo $apprenants['apprenant 1']['prenom'];

foreach($apprenants as $apprenant => $infosApprenant){

  echo "le prénom de $apprenant est " . $infosApprenant['prenom'] . "<br>";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<script>
  let prenom = 'Jean-Claude';
console.log('Bonjour ' + prenom);
console.log(`Bonjour ${prenom}`);


let tableau1 =  ['Tonie', 'Elodie', 'Raphael', 'Sanaa', 'Amal'];
let tableau2 = {
  "Apprenant 1": {
    prenom: "Tonie",
    age: undefined
  },
  "Apprenant 2": {
    prenom: "Elodie",
    age: undefined
  },
  "Apprenant 3": {
    prenom: "Sanaa",
    age: undefined
  },
  "Apprenant 4": {
    prenom: "Amal",
    age: undefined
  },
}

console.log(tableau2);

</script>
</body>
</html>
