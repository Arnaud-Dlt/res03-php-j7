<?php

if(isset($_GET["route"])){
    checkRoute($route);
}

else {
    checkRoute("");
}

?>