<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/global.css" />
    <link rel="stylesheet" href="./assets/styles/exercice.css" />
    <link rel="stylesheet" href="./style.css">
    <title>Formulaire PHP</title>
</head>

<body>
    <main>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>Exercices PHP</h1>
                    </div>
                    <a href="correction/index.php" class="button">Voir la correction</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Formulaire d'inscription</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            ?>
                            <form class="form" method="POST" action="./signUp.php">
                                <div class="inputboxStorage">
                                    <label for="username">Nom utilisateur *</label>
                                    <input type="text" name="username" id="username">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="email">Adresse email *</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="password">Mot de passe *</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="passwordConfirm">Confirmer mot de passe *</label>
                                    <input type="password" name="passwordConfirm" id="passwordConfirm">
                                </div>
                                <input type="submit" value="S'inscrire" id="signUp" class="button" />
                            </form>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Formulaire de connexion</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            ?>
                            <form class="form" method="POST" action="./signIn.php">
                                <div class="inputboxStorage">
                                    <label for="username">Nom utilisateur *</label>
                                    <input type="text" name="username" id="username">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="password">Mot de passe *</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <input type="submit" value="Se connecter" id="signin" class="button" />
                            </form>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>