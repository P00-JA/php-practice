<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="styleSheet" href="style.css">
</head>
<body>
  <main>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELf"]); ?>" method="post">
       <input type="number" name="firstNum" placeholder="First Number" required>
       <select name="operator" >
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">x</option>
        <option value="divide">/</option>
        <option value="power">^</option>
        <option value="modulus">%</option>
       </select>
       <input type="number" name="SecondNum" placeholder="Second Number" required>
       <button>Calculate</button>
    </form>
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //grab data from input
        $num1 = filter_input(INPUT_POST, "firstNum",FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "SecondNum",FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //error handlers
        $errors = false;

        if(empty($num1) || empty($num2)) {
            $errors = true;
            echo "<p class ='calc-error'> Fill in all fields!! </p>";
        }

        if(!is_numeric($num1) || !is_numeric($num2)) {
            $errors = true;
            echo "<p class='calc-error'>Only input numbers!!</p>";
        }
        
        //do calculation if no errors

        if(!$errors){
            $value = 0;
            switch($operator) {
                case "add": 
                    $value = $num1 + $num2 ;
                    break;
                case "subtract":
                    $value = $num2 - $num1 ;
                    break;
                case "multiply":
                    $value = $num2 * $num1 ;
                    break;
                case "divide":
                    $value = $num1 / $num2 ;
                    break;
                case "power":
                    $value = $num1 ** $num2 ;
                    break;
                case "modulus":
                    $value = $num1 % $num2 ;
                    break;
                default:
                    echo "<h5 class='display'>Math Error</h5>";
            }

            echo "<h5 class='display' > $value </h5>";
        }



    }
    ?>
</main>
</body>
</html>