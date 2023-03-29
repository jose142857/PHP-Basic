<?php
echo "Learn Cookies <br/>";
setcookie('name','van thi',time()+24*3600);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}


?>