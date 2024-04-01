<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = ["name"=>"pooja","age"=>23 ,"Gender"=>"female"];
    if(empty(($arr))){
        echo "The Array is Empty";
    }else{
        foreach($arr as $index => $value){
            echo $index. ":" .$value."<br>";
        }
    }

    //if else if
    $a=3;
    $b= 4;
    $c= 5;
    if($a>$b && $a>$c){
      echo "a is greater";
    }else if($b>$a && $b>$c){
        echo "b is greater";
    }else{
        echo "c is greater";
    }
    echo "<br><br>";
    //switch
    $color = "Blue";

    switch($color){
        case "Red":
            echo "Color is red";
            break;
        case "Green":
            echo "Color is Green";
            break;
        case "Blue":
            echo "Color Matched : $color";
            break;
        default:
            echo "No matching color found";
    }

    echo "<br><br>";
    //while
    $month = 1;
    $month_arr = [];
    while($month <= 12){
      array_push($month_arr, $month++);
    }
    var_dump($month_arr);

    //do while and break
    echo "<br";
    $i = 1;
    do{
        if($i == 5) break;
        echo "$i <br>";
        $i++;
    }while ($i <=6);

    //match()
    $p = 5;
    $q = 7;
    $ans = match($p){
        1,3,5 => "Variable found in case 1",
        2,7,4 => "variable found in case 2"
    };

    echo $ans;
    ?>
</body>
</html>
