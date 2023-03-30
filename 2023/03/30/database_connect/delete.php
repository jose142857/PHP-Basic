<?php
echo "Learn about delete";
//  connect database "demo" to php 
$con =mysqli_connect('localhost','root', null,'dataconn') or die('failed to connect!');


// try 1 sql query 
$ex1 = 'delete from customer where id = 2';
// run ex1 
$rs = mysqli_query($con,$ex1);

// if run not success print notice
if ($rs){
    echo 'deleted successfullly!';
}
// mysqli_close($con);

// show table after deleting 
$ex2 = 'select * from customer';

$rs2 = mysqli_query($con,$ex2);
// show on screen 
while ($row = mysqli_fetch_assoc($rs2)){
    print_r($row);
}
// delete from memory 
mysqli_free_result($rs2);

// close connection 
mysqli_close($con);

?>