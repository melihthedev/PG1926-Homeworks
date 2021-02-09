<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers</title>

</head>

<body>
    <div>
        <h1>Prime Numbers</h1>


        <form>
            <label>Enter a number:</label>
            <input type="number" id="fname" name="sayi" value="Enter a number: "><br><br>
            <input type="submit" value="Is this a prime number?">
        </form><br>
        <?php

        $var = $_GET["number"];

        $prime = 0;
        $i = 2;

        do {
            if ($number % $i == 0) {
                $prime = 1;
            }
            $i++;
        } while ($i < $number);

        if ($prime != 1) {
            $result = "Prime";
        } else if ($number == 2) {
            $result = "Prime";
        } else {
            $result = "Not Prime";
        }

        echo $number;
        echo $result;
        ?>




    </div>

</body>

</html>