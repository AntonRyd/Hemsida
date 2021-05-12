
<!DOCTYPE html>
<html lang="en">
<head>
<title>Slumplista</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>
<body>
<?php

  
$namn = Anton;
$namn2= Hugo;
$namn3 = Albin;
$namn4 = Mathias;
$namn5 = Elias;
$namn6 = Olivia;

$numbers = array($number, $number2, $number3, $number4, $number5);
sort($numbers);
$low = array_shift($numbers);
$high = array_pop($numbers);
echo" Talen är: $number, $number2, $number3, $number4, $number5";


echo "<br>";
echo"Lägsta talet är: $low";

echo "<br>";

echo"Högsta talet är: $high";


?>

</html>

</body>
