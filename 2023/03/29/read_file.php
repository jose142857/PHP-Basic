Learning ReadFile <br/>

<!-- by character -->

<?php
$path = 'C:\Users\nguye\OneDrive\デスクトップ\note.txt';
$fp = @fopen($path,"r");

if(!$fp){
    echo "<strong> failed to open file!<strong>" ;
}else {
    while(!feof($fp)){
        echo fgetc($fp);
    }
    
}

?>
<br><br>
<!-- by line -->
<?php
$path = 'C:\Users\nguye\OneDrive\デスクトップ\note.txt';
$fp = @fopen($path,"r");

if(!$fp){
    echo "<strong> failed to open file!<strong>" ;
}else {
    while(!feof($fp)){
        echo fgets($fp);
    }
    
}

?>

<br><br>
<!-- read all file -->



<?php
$path = 'C:\Users\nguye\OneDrive\デスクトップ\note.txt';
$fp = @fopen($path,"r");

if(!$fp){
    echo "<strong> failed to open file!<strong>" ;
}else {
    $result = fread($fp,filesize($path));
    echo $result;
    
}

?>
