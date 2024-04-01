<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /*Some predefined variables in PHP are "superglobals", 
    which means that they are always accessible, 
    regardless of scope - and you can access them from 
    any function, class or file without having to do anything special */
    echo $_GET["name"];
    echo $_GET["bloodGroup"];

    //global variable
    $x = 75;
    $y = "This is PHP";
    function myfunction() {
        echo $GLOBALS['x'];
        global $y;
        echo $y;
    }
    myfunction();
    //unlike other programming languages the global variales cant be accessed inside a function without $GLOBALS variable
    //Create a global variable inside a function and can be used outside the function
    function newFunction(){
        $GLOBALS["z"] = 100;
        global $z;
        echo $z;
    }
    echo "<br>";
    newFunction();
    echo "<br>";
    echo $GLOBALS["z"];
    echo "<br>";
    echo $z;
    echo "<br>";
    //$_SERVER PHP super global variable which holds information about headers, paths, and script locations.
    echo $_SERVER['PHP_SELF'];//Returns the filename of the currently executing script
    echo '<br>';
    echo $_SERVER['SERVER_NAME'];//	Returns the name of the host server
    echo '<br>';
    echo $_SERVER['HTTP_HOST']; //Returns the Host header from the current request
    echo '<br>';
    echo $_SERVER['HTTP_REFERER'];  
    echo '<br>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '<br>';
    echo $_SERVER['SCRIPT_NAME'];
    
    echo '<br>';
    // $_SESSION
    $_SESSION["username"] = "Pooja";
    echo $_SESSION["username"];



    ?>
</body>
</html>