<?php
$con = mysqli_connect('localhost','root',null,'dataconn');
$sql = "update customer set name = 'nguyen van thi'where id =1";

$run = mysqli_query($con,$sql);

if($run){
    echo "sucess!";
}


$sql2 = 'select*from customer';
$run2 = mysqli_query($con,$sql2);
while($row = mysqli_fetch_assoc($run2)){
    print_r($row);
}


?>