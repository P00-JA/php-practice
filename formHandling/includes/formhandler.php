<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
    //htmlspecialchars takes data and convert into html entities
    $first_name = htmlspecialchars($_POST["firstName"]);
    $last_name = htmlspecialchars($_POST["lastName"]);
    $blood_group = htmlspecialchars($_POST["bloodGroups"]);
    $Can_donate_blood = htmlspecialchars($_POST["willingToDonate"]);
    $Age_range = htmlspecialchars($_POST["ageRange"]);
    
    if (empty($first_name) || empty($last_name)) {
      exit();
      header("Location: ../index.php");
    }

    echo "USER DATA -";
    echo "<br>";
    echo "Name :".$first_name.$last_name;
    echo "<br>";
    echo "Blood group :".$blood_group;
    echo "<br>";
    if(!empty($Can_donate_blood)){
      echo "Willing to donate blood : ".$Can_donate_blood;
    }else{
      echo "Willing to donate blood : No";
    }
    

    //header("Location: ../index.php");
 }else{
   header("Location: ../index.php");
 }