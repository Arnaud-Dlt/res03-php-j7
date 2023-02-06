<?php
require 'logic/router.php';

if(isset($_GET["route"])){
    
    $route=$_GET['route'];
    
    checkRoute($route);
}

else {
    checkRoute("");
};


//CONDITION INSCRIPTION

if(isset($_POST["first_name"]) && !empty($_POST["first_name"])
&& isset($_POST["last_name"]) && !empty($_POST["last_name"])
&& isset($_POST["email"]) && !empty($_POST["email"])
&& isset($_POST["password"]) && !empty($_POST["password"])
&& isset($_POST["confirm-password"]) && !empty($_POST["confirm-password"]))
{
    if($_POST["password"] === $_POST["confirm-password"]){
        $hashPass=password_hash($_POST["password"], PASSWORD_DEFAULT);
        $newUser=new User($_POST['first_name'],$_POST['last_name'],$_POST['email'], $hashPass);
        saveUser($newUser);
    }
    else {
        echo "Les mots de passe sont différents !";
    }

}

?>