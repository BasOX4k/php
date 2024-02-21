<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/global.css" />
    <link rel="stylesheet" href="./assets/styles/exercice.css" />
    <title>Exercice PHP</title>
</head>

<body>
    <main>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>Exercice PHP</h1>
                    </div>
                    <a href="correction/index.php" class="button">Voir la correction</a>
                </div>
                <div>
                    <p>Découvrir et pratiquer PHP</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 1</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 1 : Création et Affichage d'un Tableau de Villes
                            // ========================================================================
                            // Objectif : Pratiquer la manipulation de tableaux en PHP pour gérer des informations
                            // sur des villes et leur population.

                            $villes = [
                                ["nom" => "Paris", "population" => "22200000"],
                                ["nom" => "Marseille", "population" => "19000000"],
                                ["nom" => "Lyon", "population" => "9900000"],
                            ];
                           
                           
                           
                            foreach ($villes as $ville) {
                                echo ("<p>" . $ville["nom"] . " a une population de " . $ville["population"] . "</p>" );
                                
                            }
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 2</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 2 : Calcul de la Population Totale
                            // ========================================================================
                            // Objectif : Utiliser les structures de contrôle pour calculer et afficher la population totale.
                            
                            // 1. Initialisez une variable `$populationTotale` à 0.
                            $populationTotale = "0";

                            // 2. Parcourez le tableau `$villes` à l'aide d'une boucle et additionnez la population de chaque ville
                            //    à `$populationTotale`.
                              foreach ($villes as $ville){
                                $populationTotale = $populationTotale + $ville ["population"];
                              }
                              
                              echo "<p>Le nombre total de population est de " . $populationTotale . " habitants </p>";
                                
                            
                            // 3. Après la boucle, affichez le résultat : "La population totale des villes listées est de X habitants."
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 3</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 3 : Filtrage des Villes par Population
                            // ========================================================================
                            // Objectif : Créer un nouveau tableau contenant uniquement les villes de plus de 10 million d'habitants.
                            
                            // 1. Créez un tableau vide `$grandesVilles`.
                            $grandesVilles = [];
                            
                            // 2. Utilisez une boucle pour parcourir `$villes`. Si une ville a une population supérieure à 10 million,
                            //    ajoutez-la au tableau `$grandesVilles`.
                            foreach ($villes as $ville) {
                                if ($ville["population"] > 10000000) {
                                    $grandesVilles[] = $ville;
                                }
                            }

                            foreach ($grandesVilles as $ville){
                                echo "<p>" . $ville["nom"] . " a une population de " . $ville["population"] . "</p>";
                            }
                            // 3. Affichez les éléments de `$grandesVilles` en utilisant une boucle, avec une phrase pour chaque ville,
                            //    semblable à l'exercice 1.
                            ?>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>