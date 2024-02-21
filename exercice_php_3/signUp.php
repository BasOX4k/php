<?php
if (
    !empty($_POST)
    && isset($_POST['username'])
    && isset($_POST['email'])
    && isset($_POST['passwrod'])
    && isset($_POST['passwordConfirm'])
)   
    
    {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    
    if ($password === $passwordConfirm) {
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);


        // HASH PASSWORD !
        // NEED NEW USER !

    

    include './User.php';
    include './Db.php';
    
    $hashedPassword =   password_hash ('password', PASSWORD_DEFAULT);
    $newUser = new User ($username, $email, $password);

    $newDbConnection = new Db('./db.csv');

    if ($newDbConnection->checkIfCsvIsWritable()){
        $csv = $newDbConnection->Opencsv();
        $dbConnection->writeIntoCsv($csv, $newUser->convertToArray());
        $dbConnection->closeCsv($cvs);

        header("Location: index.php");
        exit;
    }
} else { 
        // ERROR / REDIRECTION
    }
    
}

?>