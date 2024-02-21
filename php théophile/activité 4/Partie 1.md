# Partie 1
Notre premier travail est de construire le formulaire et d'être capable d'en récupérer les informations.


## Construire le HTML
- Créer un fichier php, dans lequel on vient écrire du HTML. Ce fichier est à la racine de notre projet, et s'appelera index.php. Ce sera le fichier lu par défaut.
Dans un dossier `assets`, vous rangerez les feuilles de styles, les images, les polices et les scripts.
- Dans un second dossier `src` (pour dire source), vous créerez un fichier `traitement.php`, dans lequel on reviendra travailler plus tard.
- Dans votre fichier `index.php`, créer le formulaire, en spécifiant la méthode POST, et le chemin du fichier `src/traitement.php`.
- Ajouter au formulaire les champs suivants :
  - nom
  - prénom
  - adresse mail
  - mot de passe
  - mot de passe bis

## Traitement des informations
Une fois le formulaire soumis, on a besoin de s'assurer que les infos reçues sont bien celles attendues (Sécurité !).
- vérifier que tous les champs sont remplis.
- l'adresse mail a bien le bon format (filter)
- pas de code malveillant dans les champs textes (sécuriser le HTML)
- le mot de passe contient bien 8 caractères minimum (hasher)
- les deux mots de passes donnés sont identiques.
- on va chiffrer le mot de passe.

Si les informations données ne sont pas bonnes, il faudra retourner sur le formulaire et afficher une erreur. Afin de renvoyer les erreurs, on passera en paramètre get erreur=1 par exemple.

Pour que notre code soit le plus lisible possible, on va créer un fichier config.php, qui sera rangé dans `src`, et qui définira des constantes, comme par exemple `define('ERREUR_EMAIL', 1);`
De cette manière, dans le code on écrira ERREUR_EMAIL, et le programme remplacera automatiquement cela par 1 lors de l'exécution.

Si tout va bien, on passe à la suite.

## Instanciation de l'utilisateur
- Construire une classe User, avec les mêmes propriétés que demandé dans le formulaire, + un ID.
- Cette classe aura tous les getters et setters nécessaires.
- Faire une méthode idAleatoire(), qui permettra de créer un ID entre 0 et 100000.
- une méthode getObjectToArray() retournera toutes les propriétés sous le format d'un tableau.

## Une classe Database
Bien que nous travaillerons ici avec un fichier CSV comme base de données, nous allons créer une classe spécial qui gérera les connexions, lectures, écritures, ... à notre fichier, à notre base.
- Cette classe aura comme propriété le fichier CSV auquel se connecter.
- Elle aura plusieurs méthodes :
  - une méthode publique pour enregistrer un utilisateur
  - une méthode publique pour récupérer tous les utilisateurs

## Affichage des retours
Une fois que le traitement est terminé, nous devons renvoyer des infos à l'utilisateur. Soit tout a fonctionné, et on lui renvoie un message de succès, soit quelque chose s'est mal passé, et c'est l'échec.

## Peaufiner le code
Afin de faire un code plus propre, on va ajouter quelques éléments :
Dans notre classe User :
- Supprimer la méthode d'Id aléatoire : on veut la remplacer par une méthode qui nous donne un ID incrémenté par rapport aux autres utilisateurs.
- Créer une méthode pour créer un ID unique (pas aléatoire, mais juste le prochain chiffre qui n'est pas encore utilisé dans la liste de nos utilisateurs.) ex : $utilisateurs = [1,2,3,5,6]; le prochain utilisateur prendra l'ID 4. Celui d'après, l'ID 7.

- Bien que la vérification en PHP de tous les champs soit obligatoire du point de vue sécurité, on peut la compléter par une vérification front, afin d'éviter de solliciter le back pour pleins de détails, (ex : mot de passe trop court), et n'envoyer les réponses du formulaire que lorsque tout semble ok en front. Vous pourrez ajouter à votre convenance le style et le JS nécessaire à la vérification des champs du formulaire en HTML et JS, avec un appel `onsubmit=' return Verification()'` dans la balise `form`.
