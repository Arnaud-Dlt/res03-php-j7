<?php

if(isset($_GET["route"])){
    checkRoute($route);
}

else {
    checkRoute("");
}

if(isset($_POST["first_name"] && !empty($_POST["first_name"]))
&& isset($_POST["last_name"] && !empty($_POST["last_name"]))
&& isset($_POST["email"] && !empty($_POST["email"]))
&& isset($_POST["last_name"] && !empty($_POST["last_name"]))
&& isset($_POST["password"] && !empty($_POST["password"]))
&& isset($_POST["confirm-password"] && !empty($_POST["confirm-password"])))
{
    if($_POST["password"] === $_POST["confirm-password"]){
        password_hash($_POST["password"], PASSWORD_DEFAULT);
        saveUser($user);
    }
    else {
        echo "Les mots de passe sont différents !"
    }

}

?>