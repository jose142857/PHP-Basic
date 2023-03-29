Learn record file <br>

<?php
$path = 'C:\Users\nguye\OneDrive\デスクトップ\note.txt';
$fp = @fopen($path,"a");

if(!$fp){
    echo "<strong>failed to open specified file!</strong>";
}else{
    $data = "Hello everyone, my name is Thi";
    fwrite($fp,$data);

    fclose($fp);
    
    
}
echo file_exists($path);






?>
