<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name = "username"><br/>
        Password: <input type="password" name="password"><br/>
        <input type="submit" name = "form_click" value="Send data">

    </form>  

    <?php
    if(isset($_POST['form_click'])){
        echo "Username is :",$_POST['username'],"<br/>";
        echo "Password is :",$_POST['password'],"<br/>";



    }
    
    
    ?>


</body>
</html>