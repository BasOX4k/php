# PHP - Activité 1 : algorithmie avec PHP

- [X] Vérifier que l’install de wampp existe et est fonctionnelle.
  - [X] Nouveau projet = nouveau GIT = nouveau dossier (clonage) = nouveau virtualHost = nouvelle installation
  - [X] Démarrer avec un nouveau projet «Apprentissage PHP»
- [X] découverte de quelques fonctions de base :
  - [X] echo
  - [X] déclaration de variable
  - [X] activité simple : afficher bonjour prenom.
  - [X] conditions
- [X] activité : si prénom == « le vôtre », alors Bonjour, créateur ! Sinon Bonjour prénom
- [X] déclaration d’une variable tableau [10 prénoms]
  - [X] activité : si prénom existe dans mon tableau, alors bonjour prénom, sinon bonjour bel(le) inconnu(e)
- [X] boucle while et for
  - [X] activité : pour chaque prénom de mon tableau, dire bonjour prénom
  - [X] activité : tant qu’il y a un prénom dans mon tableau, dire bonjour prenom
  - [X] activité : tant que i < 5 , dire bonjour prénom n°[ i ]. S’arrêter après le 5e.
  - [X] activité : stopper la boucle quand j’arrive au 6e prenom. A faire avec while ou for et break.

- [] Reprise de l’algorithme du zoo :
  - [] Utiliser ce tableau :
  [
  'lion'=>['viande', TRUE],
  'loup'=>['viande', FALSE],
  'tigre'=>['viande', TRUE],
  'panthère'=>['viande', FALSE],
  'éléphant'=>['fourrage', TRUE],
  'girafe'=>['fourrage', FALSE],
  'antilope'=>['fourrage', FALSE],
  'gerbille'=>['graines', TRUE],
  'perroquet'=>['graines', FALSE],
  'paon'=>['graines', FALSE],
  ]

  - [X] On vérifie que chaque animal a bien mangé son repas (true ou false)
  - [X] Si c'est true, dit que tout est OK
  - [X] Si c'est false, on change la valeur à true, en disant qu'on vient de lui donner à manger.
  - [X] POUR Aller plus loin : on met tout ça dans une autre boucle, while. Tant que la variable "validation" est n'est à true, on donne à manger aux animaux. Lorsque tous les animaux ont mangé, on passe la variable validation à true, et on sort de la boucle, en disant que le gardien a fait du bon travail !

### Activité en autonomie :

Afficher des infos liées à la température sur un mois :
- Construire un tableau, avec une quantité de pluie en mm, une température max et une température min par jour.
- Afficher la température moyenne des températures du mois.
- Afficher la température la plus basse, et la plus haute.
- Afficher un diagramme avec une colonne pour chaque jour, dont la hauteur représente la quantité d’eau tombée chaque jour.
- Ajouter à ce diagramme un point/jour pour la température haute en rouge, et un point pour la température basse en bleu.


## Reprise des activités d'algo

On va reprendre dans un premier temps les exercices d'algorythmie que nous avions déjà vus avec JS, pour s'approprier le langage PHP. La syntaxe change un peu, mais la logique est identique !

### Calcul d'aire d'un carré
- À partir d’un côté, calculer la surface d’un carré puis l’afficher.
- Compléter le programme précédent en donnant le mètre comme unité, et en s’assurant de l’unité donnée au début.

### Calcul d'IMC

- Calculer l’indice de masse corporelle (IMC).L'IMC (Indice de Masse Corporelle) se calcule en divisant la masse en kg d'un individu par le carré de sa taille exprimée en mètre. On considère une situation de surpoids si l’IMC est supérieur à 25.0
- Calculer l’âge d’une personne à partir de sa date de naissance.

### Calcul du carré d'un nombre entier
Une manière originale de calculer le carré d’un nombre entier positif n est d’effectuer la somme des n premiers nombres impairs.

Exemples :
4²=1+3+5+7=16
5²=1+3+5+7+9=25
Réaliser le programme adéquat.

### Année Bissextile
- Dire si une année est bissextile : Une année est bissextile si elle est un multiple de 4, mais pas un multiple de 100, ou si elle est un multiple de 400. Ainsi par exemple, 2000 est bissextile, 2016 également. 1900 et 2015 ne le sont pas. https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile
- Rajouter au programme précédent une ligne pour préciser combien de jour il y a dans l’année en question, et combien de jours il y a dans le mois de février de l’année en question.


### Écrire des fonctions
- Ecrire une fonction getMin([ ]) qui, à l’aide d’une boucle, retourne la plus petite valeur du tableau passé en paramètre.
- Ecrire une fonction getMean([ ]) qui, à l’aide d’une boucle, retourne la moyenne du tableau passé en paramètre.
- Faire une fonction getSum([ ]) qui additionne tous les nombres d’un tableau passé en paramètre.
- Faire une fonction qui vérifie si la fonction getSum() fonctionne bien, (c’est ce qu’on appelle un test unitaire). Par exemple, si on lui passe le tableau [‘2’,’4’,’-3’], la somme est 3. La fonction testGetSum( [ ], réponse ) lancera la fonction getSum() et comparera le résultat obtenu avec celui attendu.
- Ecrire une fonction triCroissant([ ]) qui effectue l’action de trier en ordre croissant des éléments du tableau. Elle renverra le tableau trié.


### Trouve le nombre caché !
- Vous devez maintenant écrire un programme pour trouver une valeur entre 0 et 100 que vous aurez choisie. Quand le programme vous fait une proposition, vous répondrez «plus petit», «plus grand», ou «gagné», en fonction.
- Le programme devra être le plus efficace possible, en vous proposant toujours la valeur médiane entre la plus petite et la plus grande qu’il connaît déjà. Par exemple, entre 0 et 100, il devra vous proposer 50 comme première proposition.
- Si le programme n’arrive pas à comprendre ce que vous lui avez répondu (à cause d’une faute de frappe par exemple), il doit vous reposer la question en vous disant qu’il n’a pas compris votre réponse.
- Quand il aura gagné, il devra préciser le nombre de coups qu’il lui a fallu pour tomber sur la bonne réponse.
