

Learning openFile <br/>

<?php
$path = 'C:\Users\nguye\OneDrive\デスクトップ\note.txt';
$fp = @fopen($path,"r");

if($fp){
    echo "<strong> Success!<strong>" ;
}else {
    echo "fail!";
    
}

?>