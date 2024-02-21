## Étape 4

### Exercice : Gérer la connexion d'un utilisateur

🎯 Objectif : Exploiter la requête POST issues de la soumission du formulaire pour connecter un utilisateur
et le rediriger vers la page d'accueil.

---

1. Importer les classes `User` et `Db`.
2. Vérifier la présence de `$_POST` et des champs `username` et `password`.
3. Utiliser `htmlspecialchars()` pour sanitiser les entrées et prévenir des attaques XSS.
4. Créer une instance de la classe `Db` pour interagir avec le fichier CSV.

5. Lire les utilisateurs enregistrés à partir du CSV en utilisant la méthode appropriée de `Db`.
6. Parcourir chaque utilisateur enregistré pour vérifier la correspondance du `username` et la validation du `password` avec `password_verify()`.
7. Si les identifiants sont corrects :
    - Créer une instance de `User` avec les informations de l'utilisateur authentifié.
    - Rediriger l'utilisateur vers `index.php` avec un paramètre `successSignIn=1` et inclure le `username` de l'utilisateur.
8. Si aucun utilisateur correspondant n'est trouvé, rediriger vers `index.php` avec `successSignIn=0` pour indiquer l'échec de la connexion.
9. Arrêter l'exécution du script après la redirection pour éviter toute exécution supplémentaire.
