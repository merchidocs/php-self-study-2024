<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="type" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $y = $_POST["z"];
    //$total = null;
    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = pow($x, $y);
    //$total = sqrt($x);
    //$total = max($x, $y, $z);
    //$total = min($x, $y, $z);
    //$total = rand(10, 100);
    //echo $total;
    
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    
    $area = pi() * pow($radius, 2);
    $area = round($area);
    
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);



    echo "Circumference = {$circumference} cm^ <br>";
    echo "Area = {$area} cm^ <br>";
    echo "volume = {$volume} cm^ <br>";

    //$a = 5;       // Integer
    //$b = 5.34;    // Float
    //$c = "hello"; // String
    //$d = true;    // Boolean
    //$e = NULL;    // NULL;

    //$x = 10.365;
    //var_dump(is_float($x));

    /*
    $hours = 50;
    $rate = 15;
    $weeklyPay = null;

    if($hours <= 0){
        $weeklyPay == 0;
    } 
    elseif($hours <= 0){
        $weeklyPay = $hours * $rate;
    }
    else{
        $weeklyPay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
    }
    echo "Your made \$($weeklyPay) this week";
    */
    

    /*
    $grade = "A";

    switch ($grade) {
        case 'A':
            echo "You did great!";
            break;
        case "B":
            echo "You did good.";
        case 'c':
            echo "You did okay";
            break;
        case 'D':
            echo "You did poorly.";
            break;
        case 'F':
            echo "You failed.";
            break;
        
        default:
            echo "{$grade} is not valid.";
            break;
    }
    */
    
?>