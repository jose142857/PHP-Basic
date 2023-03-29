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
$email = htmlspecialchars($_GET['email'] ?? '') ;
$password =htmlspecialchars($_GET['password'] ?? '') ;
echo $email," ";
echo $password;


?>

    <h3>login to your account</h3>
<form 
    action="<?php http://localhost:3000/super_globals.php;?>"
    method ="Get">
    
    Email : <input type="email" name = "email"><br/>
    Password: <input type="password" name ="password"><br/>
    <input type="submit" name = "submit">
      
   


</form>


</body>
</html>