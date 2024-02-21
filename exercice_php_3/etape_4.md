## Étape 5

### Exercice : Gérer les retours des formulaires d'inscription et de connexion

🎯 Objectif : Afficher des retours appropriés à l'utilisateur après soumission des formulaires d'inscription et de connexion, en fonction des paramètres retournés dans l'URL.

---

1. Initialiser les variables de contrôle pour l'inscription (`formSignUpSubmitted`, `formSignUpSubmitSuccess`) et la connexion (`formSignInSubmitted`, `formSignInSubmitSuccess`, `authenticatedUserUsername`).
2. Vérifier si les paramètres `successSignUp` ou `successSignIn` sont présents dans l'URL.
3. Pour l'inscription :
    - Si `successSignUp` est `1`, considérer l'inscription comme réussie.
    - Si `successSignUp` est `0`, considérer l'inscription comme échouée.
4. Pour la connexion :
    - Si `successSignIn` est `1` et le `username` est présent, considérer la connexion comme réussie et stocker le `username`.
    - Si `successSignIn` est `0`, considérer la connexion comme échouée.
5. Afficher les messages de succès ou d'erreur en fonction des résultats des formulaires.
    - Inclure `signUpCardSuccess.php` ou `signUpCardError.php` pour les retours d'inscription.
    - Inclure `signInCardSuccess.php` ou `signInCardError.php` pour les retours de connexion.
6. Présenter les formulaires d'inscription et de connexion, en conservant les champs requis (`username`, `email`, `password`, `passwordConfirm` pour l'inscription ; `username`, `password` pour la connexion).
7. Envoyer les données du formulaire d'inscription à `signUp.php` et celles du formulaire de connexion à `signIn.php`.
