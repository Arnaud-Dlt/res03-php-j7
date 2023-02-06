<?php
require '../models/user.php';

function loadUser(string $email): User { 
    $db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj7",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
    );
    
    $query=$db->prepare("SELECT * FROM users WHERE email= :email");
    
    $parameters=['email' => $email];
    
    $query->execute($parameters);
    
    $loadedUser = $query->fetch(PDO::FETCH_ASSOC);
    
    $newUser=new User($loadedUser["first_name"],$loadedUser["last_name"],$loadedUser["email"],$loadedUser["password"]);
    
    $newUser->setId($loadedUser["id"]);
    
    return $newUser;
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

    return loadUser($user->getEmail());
};
$user1=new User("Arnaud","deletre","afez@fze.fr", "azerty");
var_dump(saveUser($user1));
$loadUser=loadUser("afez@fze.fr");
var_dump($loadUser);

?>