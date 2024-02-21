# PHP – activité 2 : Formulaire

Maintenant qu’on a vu comment on envoie du html sur une page web, on a envie d’avoir un retour : Que l’utilisateur nous réponde, et qu’on traite sa réponse.
## Formulaire de contact
### Code html avec un formulaire
✅ On va donc faire un formulaire de contact, en demandant :
- son nom, prénom,
- son adresse mail
- son sujet de message
- son message

### Recevoir l’information
✅ Method : POST

✅ action : « votrefichier.php »

✅ ensuite dans notre fichier.php : `$_POST['info'] ...`

### Puis la vérifier.
✅ Empty, isset, …
✅ S’assurer que les nom et prénom ont bien une majuscule au début.
✅ Remplacer pour tous les champs les symboles de guillemets, d’apostrophe, ou de balise de code (ex : `<script>`) soit par rien, soit par « anti-slash » + guillemet ou apostrophe ( \'), soit par le symbole html du guillemet ou de l’apostrophe, afin de sécuriser notre code.
✅ S’assurer que l’adresse mail contient bien un @.


### Ensuite, la traiter.
Ici on pourrait envoyer un mail avec les infos, enregistrer les informations dans un fichier, …
Comme on utilise wamp, et que vos serveurs locaux sont sans doute pas paramétrés pour envoyer des mails, on va pas faire ça. On va commencer par afficher sur une page le résultat.

(Renvoyer sur la page une notification en disant que vous avez une notification.)

➡️ Renvoyer sur la page les informations vérifiées, dans un encart, en disant : votre mail a bien été envoyé. Récapitulatif : et afficher toutes les informations (nom prénom, mail, objet, message).

(Renvoyer les informations directement dans le formulaire, en value, cacher le premier bouton et afficher un autre bouton pour demander à l’utilisateur de valider ses informations pour les envoyer. Puis, lorsque ce bouton est coché, envoyer à l’utilisateur un message sur la page en lui disant que son message a bien été envoyé !)

### Enfin, réaliser une action terminale
#### Dans le cas où il manque des infos :
Gérer le cas où le questionnaire n’a pas encore été rempli.
#### Dans le cas où il y a des erreurs dans le formulaire :
Gérer le cas où il y a des erreurs dans le questionnaire : oubli d’une case, adresse mail pas conforme, s’il y a du code indésirable…
#### Dans le cas où tout se passe bien :
Dire à l’utilisateur que son message a bien été envoyé.


## Pour aller plus loin :

1. Enregistrer les informations dans un fichier csv pour les conserver.
2. Créer un fichier formulaire, un fichier traitement, et un fichier admin.
3. Le fichier formulaire contient le code html et le code de vérification.
4. Le fichier traitement contient... le code de traitement !
5. Le fichier admin contient le code d’une interface admin, où apparaîtra le message, préalablement enregistré dans le fichier csv.
6. Mettre une authentification obligatoire pour arriver sur l’admin.
7. Effectuer des vérification en javascript avant l’envoi du formulaire, afin de vérifier que l’adresse mail est valide, que tous les champs sont remplis, et qu’il n’y a pas de code malveillant. Cela n’empêche pas de faire une vérification en php quand même (par ex dans le cas où l’utilisateur désactive js sur son navigateur, ou supprime le script sur sa page…), mais permet d’éviter un traitement côté serveur pour une requête mauvaise. Économie d’aller-retours entre serveur / client ☺
