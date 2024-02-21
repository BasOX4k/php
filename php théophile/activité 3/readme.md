# PHP - activité 3 : Variables de Session

Afin d'appréhender les variables de session, nous allons réaliser un formulaire d'authentification, et une page d'admin. On ne pourra accéder à la page admin que si l'on est connecté. Dès qu'on se déconnecte, on perd l'accès.

## Étapes :
- Réaliser un formulaire d'authentification
- Vérifier que l'utilisateur existe, que le mot de passe correspond au mot de passe haché.
- Rediriger l'utilisateur vers l'admin ou vers le formulaire en fonction du résultat
- Permettre à l'utilisateur de se déconnecter depuis son espace admin.
- Si l'utilisateur est déjà connecté, lorsqu'il essaie de se rendre sur la page d'authentification, il est redirigé vers la page admin.
- Si l'utilisateur est déconnecté, lorsqu'il essaie d'atteindre la page admin, il est redirigé vers la page d'authentification.

## Règles supplémentaires :
- Chiffrer les mots de passe, pour que personne ne puisse les récupérer.
- Mettre une durée de session max, après quoi l'utilisateur est automatiquement déconnecté.

## Pour aller plus loin :
- Proposer la possibilité de se créer un compte. Un seul compte par nom d'utilisateur, email, ...
