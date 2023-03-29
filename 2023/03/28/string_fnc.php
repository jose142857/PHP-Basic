<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// echo " lear about string fnc <br/>";
// $full_name = 'nguyen van sd';
// echo "length :",strlen($full_name),"<br/>";
// echo strrev($full_name),"<br/>";
// echo strtoupper($full_name),"<br/>";
// echo str_replace(' ','--',$full_name);

$my_string = "<h1>Html String</h1>";

echo $my_string ;
echo htmlspecialchars($my_string);

printf("<br/> %s likes %s",'thi','mercedes');

    




?>

</body>
</html>