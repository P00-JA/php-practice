<?php
//array indexing
$arr = [1=>"name",3=>"age",2=>"place",4=>"gender","blood group","phone"];
echo "<pre>";
var_dump(($arr));
//associative array
echo "<pre>";
$arr2 = ["one"=>"name","zero"=>"age","gender"];
var_dump(($arr2));
echo $arr2['zero'] ;
//multidimensional array
$users =[
    [
        "name"=>"Pooja",
        "age"=>23,
        "gender"=>"Female",
        "place"=>"Kochi",
        "department"=>"WebToffee",
        "role"=>"Software Engineer",
        "married"=>false,
        "weight"=>51.5
    ],
    [
        "name"=>"Aravind",
        "age"=>25,
        "gender"=>"male",
        "place"=>"Kozhikode",
        "department"=>"React",
        "role"=>"Software Engineer",
        "married"=>false,
        "weight"=>70.5 
    ],
    [
    "name"=>"Neha",
    "age"=>27,
    "gender"=>"Female",
    "place"=>"Trivandrum",
    "department"=>"manetus",
    "role"=>"Product Designer",
    "married"=>false,
    "weight"=>52
    ],
    [
        "name"=> "Hemanth",
        "age"=>30,
        "gender"=> "Male",
        "place"=>"Calicut",
        "department"=>"FullStack",
        "role"=> "Senior Software Developer",
        "married"=>false,
        "Weight"=>75
    ]
] ;
var_dump($users);
var_dump($users[1]["name"]);
//Accessing array elements using foreach loop
foreach ($users as $user) {
 echo $user["name"] . " , ". $user['age']. " , ". $user['department'];
 echo "<pre>";
}

foreach($arr as $index => $ar){
    echo $index . "-" . $ar . "\r";
}
array_push($arr,"status");
$arr += ["one"=>"date","two"=>"time"];
var_dump($arr);
array_splice($arr,1,1);
var_dump($arr);
unset($arr['one']);
var_dump($arr);
//remove from associated array using array_diff
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964) ;
$new = array_diff($car,["Mustang",1964]);
//array_diff takes values and not keys
var_dump($new);
//array_pop-remove last item
array_pop($car);
var_dump($car);
//array_shift removes first element 
array_shift($car);
var_dump($car);
//array sorts
//sort(),rsort(),asort(),ksort(),arsort(),krsort()
$num = [5,3,1,8,0,4];
sort($num);
var_dump($num);
rsort($num);
var_dump($num);

$person = ["name"=>"Pooja","age"=>23,"gender"=>"Female"];
asort($person);
var_dump($person);
ksort($person);
var_dump($person);
arsort($person);
var_dump($person);
krsort($person);
var_dump($person);
