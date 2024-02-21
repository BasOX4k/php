# Partie 3
La personne est authenfiée. Elle va donc pouvoir accéder au tableau de bord du site.
Mais seules les personnes authentifiées le peuvent !

## Bloquer les accès non autorisés
Créer un fichier `tableau-de-bord.php` à la racine du site.
Dans un premier temps, nous devons empêcher les personnes non authentifiées de pouvoir accéder au tableau de bord. On va donc écouter la session, et s'il n'y en a pas, on redirige vers la page de connexion.

De la même manière, on va modifier le fichier de connexion, en ajoutant une condition :
Si la personne est connectée, aucune raison de rester sur la page de connexion, on la redirige donc automatiquement vers le tableau de bord.

## Factoriser le code front
Toutes nos pages ont un header, un footer, et toutes les pages du tableau de bord auront aussi une colonne latérale et un contenu. Si on crée tous les fichiers à la main, et qu'on veut ajouter un lien dans la colonne latérale par exemple, ça nous obligera à reprendre tous les fichiers concernés, au risque d'en oublier un...

On va donc créer un dossier supplémentaire, `includes`, dans lequel on va créer des bouts de fichiers :
- le header,
- le footer,
- la colonne, ...

Chacun de ces fichiers sera ensuite appelé dans le fichier principal (par exemple `tableau-de-bord.php`) avec des `include 'includes/header.php'`.
De cette manière, toutes les parties réutilisables de notre code sont uniques, facilement retrouvables, modifiables et appelables partout.

## Le header
On va ajouter notre header sur tout nos fichiers à la racine de notre site : index, connexion, ... Il comportera 3 éléments : un logo à gauche, deux boutons connexion et inscription à droite.

Si la personne est connectée, on remplacera les deux boutons par un seul : déconnexion.

## La colonne latérale
une colonne à gauche, qui prend toute la hauteur de l'écran et qui a une largeur fixe.
On y fera apparaître le h2 "Bonjour `PRENOM` !", où l'on prendra soin de remplacer prénom par... le prénom de notre utilisateur !

En-dessous, on fera une liste avec deux liens :
- mon compte
- mes abonnements

Mon compte renverra sur une sous partie du tableau de bord où l'on pourra voir ses informations.

Mes abonnements fera pareil, mais on affichera simplement "Vous n'avez aucun abonnement.".

Pour renvoyer sur ces différentes sections, on utilisera un paramètre en url (`section=compte`).

## Les sections
Chaque section sera aussi un fichier à inclure. Sans surprise, on le rangera donc dans le dossier `includes`. la section `section-compte.php` ne sera appelée que si l'url contient le bon paramètre, pareil pour la section abonnements. Et dans le cas où rien n'est appelé on laisse la page blanche.

## améliorations
Pour un meilleur confort utilisateur, lorsque nous sommes dans une section, il serait intéressant que nous voyions dans la colonne latérale le lien correspondant actif. Ajouter une classe "actif" au lien, dans le cas où on est dans la section associée.

Un utilisateur a le droit de vouloir supprimer son compte.
- Ajouter à notre classe Database une méthode publique deleteUser() pour supprimer un utilisateur à partir de son ID. Cette méthode viendra réécrire le fichier en 'wb', après avoir récupéré tous les utilisateurs. Dans une boucle, vous réécrirez toutes les lignes, sauf celle qui correspond à l'utilisateur à enlever.
- Ajouter dans la section compte un bouton, qui appelera un nouveau fichier `src/suppression.php`, et qui passera l'ID de l'utilisateur en paramètre.
- dans le fichier de suppression, afin de s'assurer que celui qui tente de supprimer le compte est bien l'utilisateur en question, on va comparer l'ID reçu en get et l'ID de l'utilisateur connecté. S'ils sont identiques, on appelle la méthode deleteUser().
- On pensera à supprimer la session de l'utilisateur, pour qu'il ne puisse pas continuer à voir le tableau de bord s'il n'a plus de compte.
