# Partie 2
Maintenant que nous pouvons nous inscrire, on veut pouvoir s'authentifier.

## Construire le HTML
Construire un nouveau fichier `connexion.php`.
Cette page contiendra le formulaire de connexion. Lorsqu'une inscription sera réussie, on renverra l'utilisateur directement sur cette page, en lui ajoutant un message de réussite.

Deux champs sont donc attendus :
- l'adresse mail
- le mot de passe

Le formulaire renverra avec la méthode post vers le fichier à créer `src/authentication.php`.

## Ajout de fonctionnalités
Afin de pouvoir facilement chercher un utilisateur dans notre base de données, on va ajouter deux méthodes dans notre classe User :
  - une méthode publique getUserById() pour retrouver un utilisateur en fonction de son ID
  - une méthode publique getUserByMail() pour retrouver un utilisateur en fonction de son mail

## Créer le traitement
Si les champs du formulaire de connexion sont remplis, nous procédons à la vérification.
- Utiliser la méthode précédemment créée pour tenter de retrouver l'utilisateur.
- Si on le trouve, vérifier le mot de passe donné avec le mot de passe hashé.
- Si tout est ok, enregistrer en session que l'utilisateur est connecté, (`$_SESSION['connecté'] = TRUE`) et on enregistre aussi l'objet utilisateur (`$_SESSION['user'] = serialize($user)`).

Attention, il y a des choses à faire en plus pour lancer la session. Faites des recherches autour de session_start, et le principe de session en PHP.

La sérialisation de l'objet permet de pouvoir le stocker sous format texte dans la session, pour le remettre sous format objet plus tard (unserialize()).

Maintenant que la personne est authentifiée et qu'une session a été ouverte, nous pouvons la rediriger vers le tableau de bord.
