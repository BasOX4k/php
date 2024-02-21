<?php
final class Database{
  private $_DB;

  public function __construct(){
    $this->_DB = __DIR__ . "/../csv/utilisateurs.csv";
  }

  public function getAllUtilisateurs(): array {
    $connexion = fopen($this->_DB, 'r');
    $utiliseurs = [];

    while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
      $utiliseurs[] = new User($user[1],$user[2],$user[3],$user[4],$user[0],$user[5]);
    }

    fclose($connexion);

    return $utiliseurs;
  }

  public function getThisUtilisateurById(int $id) : User|bool {
    $connexion = fopen($this->_DB, 'r');
    while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
      if ((int) $user[0] === $id) {
        $user = new User($user[1],$user[2],$user[3],$user[4],$user[0],$user[5]);
        break;
      }else {
        $user = false;
      }
    }
    return $user;
  }

  public function getThisUtilisateurByMail(string $mail) : User|bool {
    $connexion = fopen($this->_DB, 'r');
    while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
      if ($user[3] === $mail) {
        $user = new User($user[1],$user[2],$user[3],$user[4],$user[0],$user[5]);
        break;
      }else {
        $user = false;
      }
    }
    return $user;
  }

  public function saveUtilisateur(User $user) : bool {
    $connexion = fopen($this->_DB, 'ab');

    $retour = fputcsv($connexion, $user->getObjectToArray());

    fclose($connexion);

    return $retour;
  }

  public function deleteUser(int $id): User| bool {


  } 


  public function getThisUserById(int $id): User|bool {

    // Chercher dans la base de données si l'id existe
    // 1. ouvre le fichier à lire 'r'
    // 2. Faire une boucle pour lire chaque ligne
    // 3. vérfier si l'ID donné correspond à l'ID de la ligne
    // 4. si oui, instancier User
    // 5. sinon, $user = false;


    return $user;
  }
}
