## Étape 1

### Exercice : Gestion de Fichiers CSV avec une Classe PHP

🎯 Objectif : Utiliser la classe `Db` pour manipuler un fichier CSV.
Le fichier CSV servira de base de données simplifiée pour stocker des données.

🚨 Prérequis : **Avoir un fichier CSV nommé 'db.csv' dans le même dossier que votre script** et créer un fichier pour accueillir la classe `Db`.

___

Créez la classe `Db`, celle-ci a une propriété `pathToCsv`. Le `constructor()` de la classe reçoit un paramètre pour attribuer une valeur à cette propriété. L'idée est de recevoir un string représentant le chemin vers le fichier .CSV que l'on souhaite utiliser comme base de données. N'oubliez pas les méthodes `get` et `set`.
___

Créez la méthode `checkIfCsvIsWritable()` pour vérifier si le fichier CSV est accessible en écriture et retourner le résultat (boolean).

🔗 https://www.php.net/manual/fr/function.is-writable.php

___

Créez la méthode `readCsv()` pour lire le contenu d'un fichier .CSV et le retourner.

🔗 https://www.php.net/manual/fr/function.fopen.php 

ℹ️ Le deuxième paramètre de la fonction sera `'r'`.

___

Créez la méthode `openCsv()` pour ouvrir le fichier CSV en mode ajout et retourner le fichier. 

ℹ️ Même fonction que `readCsv()` mais cette fois-ci le second param-tre de la fonction sera `'ab'`.

___

Créez la méthode `writeIntoCsv()` qui reçevra le fichier dans lequel écrire et le contenu à écrire en paramètre.

🔗 https://www.php.net/manual/fr/function.fputcsv.php

___

Créez la méthode `closeCsv()` qui reçevra en paramètre un fichier pour le fermer.

🔗 https://www.php.net/manual/fr/function.fclose

___

Créez la méthode suivante : 

```php
public function readFromCsv()
    {
        $data = [];
        $csv = $this->readCsv();

        if ($csv !== false) {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row;
            }

            $this->closeCsv($csv);
        }

        return $data;
    }
```

