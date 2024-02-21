<?php

$formSignUpSubmitted = false;
$formSignUpSubmitSuccess = null;

if (!empty($_GET) && isset($_GET['successSignUp'])) {
    $formSignUpSubmitted = true;

    if ($_GET['successSignUp'] === '1') {
        $formSignUpSubmitSuccess = true;
    } elseif ($_GET['successSignUp'] === '0') {
        $formSignUpSubmitSuccess = false;
    }
} else {
    $formSignUpSubmitted = false;
}

$formSignInSubmitted = false;
$formSignInSubmitSuccess = null;
$authenticatedUserUsername = null;

if (!empty($_GET) && isset($_GET['successSignIn'])) {
    $formSignInSubmitted = true;

    if ($_GET['successSignIn'] === '1' && isset($_GET['username'])) {
        $formSignInSubmitSuccess = true;
        $authenticatedUserUsername = $_GET['username'];
    } elseif ($_GET['successSignIn'] === '0') {
        $formSignInSubmitSuccess = false;
    }
} else {
    $formSignInSubmitted = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../assets/styles/global.css" />
    <link rel="stylesheet" href="./../assets/styles/exercice.css" />
    <link rel="stylesheet" href="./../style.css">
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
                    <a href="../index.php" class="button">Retour à l'exercice</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction formulaire d'inscription</h2>
                        <div class="exerciceboxStorage">
                            <?php

                            if ($formSignUpSubmitted && $formSignUpSubmitSuccess) {
                                include './../components/signUpCardSuccess.php';
                            } elseif ($formSignUpSubmitted && !$formSignUpSubmitSuccess) {
                                include './../components/signUpCardError.php';
                            }

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
                        <h2 class="exerciceTitle">Correction formulaire de connexion</h2>
                        <div class="exerciceboxStorage">
                            <?php

                            if ($formSignInSubmitted && $formSignInSubmitSuccess) {
                                include './../components/signInCardSuccess.php';
                            } elseif ($formSignInSubmitted && !$formSignInSubmitSuccess) {
                                include './../components/signInCardError.php';
                            }

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