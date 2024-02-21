<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../assets/styles/global.css" />
    <link rel="stylesheet" href="./../assets/styles/exercice.css" />
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
                    <a href="../index.php" class="button">Revenir à l'exercice</a>
                </div>
                <div>
                    <p>Découvrir et pratiquer PHP</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 1</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 1 : Création et Affichage d'un Tableau de Villes
                            // ========================================================================
                            
                            $villes = [
                                ["nom" => "Paris", "population" => "22200000"],
                                ["nom" => "Marseille", "population" => "19000000"],
                                ["nom" => "Lyon", "population" => "9900000"],
                            ];

                            foreach ($villes as $ville) {
                                echo "<p>" . $ville["nom"] . " a une population de " . $ville["population"] . "</p>";
                            }

                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 2</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 2 : Calcul de la Population Totale
                            // ========================================================================
                            
                            $populationTotal = 0;

                            foreach ($villes as $ville) {
                                $populationTotal += $ville["population"];
                            }

                            echo "<p>La population totale des villes listées est de " . $populationTotal . " habitants</p>";

                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 3</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 3 : Filtrage des Villes par Population
                            // ========================================================================
                            
                            $grandesVilles = [];

                            foreach ($villes as $ville) {
                                if ($ville['population'] > 10000000) {
                                    $grandesVilles[] = $ville;
                                }
                            }

                            foreach ($grandesVilles as $ville) {
                                echo "<p>" . $ville["nom"] . " a une population de " . $ville["population"] . "</p>";
                            }
                            ?>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>