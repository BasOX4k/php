# Partie 4
Notre client est très content ! Il a un site avec un formulaire d'inscription, les utilisateurs peuvent se connecter, voir leur tableau de bord et supprimer leur compte.
Il aimerait à présent avec un accès administrateur, afin de voir tous ses utilisateurs depuis son compte.

## Ajouter une propriété rôle
Actuellement on ne peut pas différencier les utilisateurs entre eux. Nous allons modifier la classe User pour ajouter une nouvelle propriété rôle, qui par défaut sera égale à 'user'.
- Ajouter cette propriété, et créer les getter et setter associés.
- ajouter une méthode isAdmin(), qui retournera true ou false, pour savoir si notre utilisateur est administrateur ou pas.
- vous penserez à ajouter un paramètre au constructeur, et à la méthode getObjectToArray().

## Modifier le fichier utilisateurs.csv
Afin de voir si notre code marche, il faut aller ajouter une colonne dans notre csv, pour les anciens utilisateurs avant cette feature. On le fait à la main, pour tester déjà le isAdmin().

## Modifier la classe Database
Dans notre fichier Database, un certain nombre de méthode instancie l'objet User. Il va falloir modifier notre code pour ajouter le 6ème paramètre. Attention, il est le dernier du fichier csv, mais arrive après l'ID dans l'ordre des paramètre passés au constructeur...

## Modifier la colonne latérale
Lorsqu'on est administrateur, on voit apparaître un 3ème lien dans la colonne de notre site, pour nous rendre dans l'Administration.

## Administration
Créer un nouveau fichier, qui, comme les autres, ne sera accessible que si l'on est admin et connecté, et qui incluera le header, la colonne et une section.
On crééera une colonne propre à l'administration, qui permettra de voir la section Liste des utilisateurs, et retour au tableau de bord.

## Section utilisateurs
Elle affichera un tableau avec la liste des utilisateurs. On n'affiche jamais les mots de passes. La dernière colonne de notre tableau contiendra un bouton supprimer, qui supprimera l'utilisateur de la ligne (passer le bon ID en paramètre).

## Modifier le fichier suppression
On ajoutera au fichier suppression une condition : si un utilisateur cherche à supprimer un autre ID que le sien, on vérifie s'il est admin. Si c'est le cas, on autorise la suppression.

## Améliorations
Afin d'alléger les pages et de réduire les failles de sécurité, on va découper notre feuille de style en plusieurs bouts :
- main.css : contiendra tout ce que tout le monde peut voir, même sans être connecté
- form.css : contiendra les règles css des formulaires
- dashboard.css : contiendra les règles liées au tableau de bord
- admin.css : contiendra les règles nécessaire à l'admin, en plus de toutes les autres.

En conclusion, dans l'admin on aura 3 feuilles appelées : main, dashboard et admin.
