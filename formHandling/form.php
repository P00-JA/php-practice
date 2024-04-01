<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form  method="post" >
        <input type="text" name="name" placeholder="Name" ><br>
       <input type="email" name="email" placeholder="Email " ><br>
       <input type="password" name="password" placeholder="Password"><br>
       <input type="tel" name="phone"placeholder="Phone no:"><br>
       <input type="url" name="linkedin" placeholder="Linkedin url"><br>
       <input type="date" name="dateofbirth" placeholder="DOB"><br>
       <input type="number" name="age" placeholder="age"><br>
       <input type="time" name="birthTime" placeholder="Time Of Birth"><br>
       <input type="week" name="birthWeek" placeholder="Birth Week"><br>
       <input type="color" name="favColor" placeholder="Favorite Color"><br>
       <label for="range">Knowledge on Maths :</label>
       <div> 0 <input type="range" min="0" max="10"> 10 </div><br>
       <input type="search" name="state" placeholder="state"><br><br>
       <button>Login</button>
    </form>
</body>
</html>