
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM HANDLING</title>
    <style>
        body{
            position: relative;
            background: black;
            color: aliceblue;
            font-family:sans-serif;

        }
        main{
            position: absolute;
            top: 10px;
            left: 200px;
            padding: 30px 20px;
            border: 2px solid white;
            border-radius: 5px;
            width: 500px;
            height: 550px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <main>
        <form action="./includes/formhandler.php" method="post">
            <fieldset>
                <legend>Personal details</legend>
                <div>
                    <label for="firstName">First Name :</label>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" >
                    <br>
                    <label for="lastName">Last Name :</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" >
                    <br>
                    <label for="bloodGroup">Blood Group :</label>
                    <br>
                    <select name="bloodGroups" id="bloodGroups">
                        <option value="O +ve">O +ve</option>
                        <option value="A +ve">A +ve</option>
                        <option value="B +ve">B +ve</option>
                        <option value="AB +ve">AB +ve</option>
                        <option value="O -ve">O -ve</option>
                        <option value="AB -ve">AB -ve</option>
                        <option value="B -ve">B -ve</option>
                    </select><br>
                </div>
            </fieldset>
             <fieldset>
                <legend>Donation Information</legend>
                <div>

                    <p><input type="checkbox" name="willingToDonate" value="yes"> willing to donate blood ?</p><br>
                    <label for="age-range">Age range :</label><br>
                    <input type="radio" name="ageRange" value="18-23"> 18-23 <br>
                    <input type="radio" name="ageRange" value="24-29"> 24-29 <br>
                    <input type="radio" name="ageRange" value="30-35"> 30-35 <br>
                    <input type="radio" name="ageRange" value="36-41"> 36-41 <br>
                </div>
             </fieldset>

            <br><br>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>