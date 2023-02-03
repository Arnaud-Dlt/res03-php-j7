<?php
require '../models/user.php';

function loadUser(string $email): User { 
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj7",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    
    $query=$db->prepare("SELECT * FROM users WHERE email= :email");
    $parameters=[
        'email' => $email
        ];
    $query->execute($parameters);
    $loadedUser = $query->fetch(PDO::FETCH_ASSOC);
};

function saveUser(User $user): User {
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj7",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    
    $query=$db->prepare("INSERT INTO users VALUES (null, :first_name, :last_name, :email, :password)");
    $parameters = [
        'first_name' => $user -> getFirstName(),
        'last_name' => $user -> getLastName(),
        'email' => $user -> getEmail(),
        'password' => $user -> getPassword()
    ];
    $query -> execute($parameters);  
    
    $query=$db->prepare("SELECT * FROM users WHERE email= :email");
    $parameters=[ 'email' => $user -> getEmail()];
    $query->execute($parameters);
    $loadedUser = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($loadedUser);
};

$newUser=new User("Arnaud", "Deletre", "ad@ad.fr", "azerty");
var_dump($newUser);
saveUser($newUser);
loadUser("ad@ad.fr")

?>