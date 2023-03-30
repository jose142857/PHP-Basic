Learn database connect<br/>

<?php
//  connect database "demo" to php 
$con =mysqli_connect('localhost','root', null,'dataconn') or die('failed to connect!');


// try 1 sql query 
$ex1 = 'select * from customer where id =1';
// run ex1 
$rs = mysqli_query($con,$ex1);

// if run not success print notice
if (!$rs){
    die( 'sql syntax is not correct');
}
// show on screen 
while ($row = mysqli_fetch_assoc($rs)){
    print_r($row);
}
// delete from memory 
mysqli_free_result($rs);

// close connection 
mysqli_close($con);

?>

