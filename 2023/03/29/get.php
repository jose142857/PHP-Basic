<?php
// $_GET = [
//     'id' =>'1',
//     'name'=> 'van thi'
// ];

echo " Data nhan duoc la <br/>";

foreach ($_GET as $key =>$val){
    echo $key,'=>',$val,"<br/>";

}


?>