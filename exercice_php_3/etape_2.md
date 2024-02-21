## Étape 3

### Exercice : Gérer l'inscription d'un utilisateur

🎯 Objectif : Exploiter la requête POST issues de la soumission du formulaire pour inscrire un utilisateur
en base de données.

---

1. Importer les classes `User` et `Db`.
2. Vérifie `$_POST` et les champs requis du formulaire.
3. Sanitiser les entrées pour prévenir XSS à l'aide de `htmlspecialchars()`.
4. Vérifier la correspondance des mots de passe.
5. Hacher le mot de passe avec `password_hash()`.
6. Créer un objet `User` avec les données précédemments traitées.

7. Créer un objet `Db` pour les opérations avec le CSV.
8. Vérifier et ouvrir le CSV en mode ajout, utiliser la méthode de `Db` appropriée.
9. Écrire les données utilisateur dans le CSV, utiliser la méthode de `Db` appropriée.
10. Fermer le CSV et rediriger avec succès/échec, utiliser la méthode de `Db` appropriée.
11. Rediriger l'utilisateur sur la page de formulaire avec un paramètre `successSignUp` dans l'URL. Le paramètre `successSignUp` vaudra `0` si l'inscription a échouée ou `1` si l'inscription c'est bien déroulée.
11. Arrêter exécution après redirection de l'utilisateur.
