<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars = [["volvo",22,18],["BMW",15,13],["Saab",5,2],["Land Rover",17,15]];
    for ($row = 0;$row < 4; $row++) {
        echo "<p> <b> Row - $row </b> </p>";
        echo "<ul>";
        for ($col = 0; $col < 3 ; $col++) {
            echo "<li>".$cars[$row][$col]. "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>