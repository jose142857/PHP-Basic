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
    // $multiply = function($a,$b){
    //     return $a*$b;
    // };
    // echo $multiply(5,6),"<br/>";
    
    // // arrow function
    // $substract = fn($a,$b)=>$a-$b;
    // echo $substract(10,5),"<br/>";

    // built in function
    // $name = ['jone','taylor','swift','peter'];
    // $name2 = ['thi','nam','huy'];
    // $merged_arr = array_merge($name,$name2);
    // print_r($merged_arr) ;
    // // echo "number of items:".count($name);

    // // array_push($name,'luan'); 
    // // print_r($name);

    // // $chunked_arr = array_chunk($name,2);
    // // print_r($chunked_arr) ;

    $number = range(1,9);
    $squared_number = array_map(function($each_num){
        return $each_num * $each_num;
    },$number);
    print_r($squared_number);
    ?>
</body>
</html>