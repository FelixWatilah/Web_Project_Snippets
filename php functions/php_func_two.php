<html>
<head>
    <title>Php function two</title>
</head>
<body>
<?php

//declaration of variables
$a = 9;
$b = 25;

//math function
function math($num1, $num2){
    echo "Multiplication: ".$num1*$num2."<br />";
    echo "Division: ".round($num1/$num2,2)."<br />";
    echo "Modulo: ".$num2%$num1."<br />";
}
math($a, $b);

?>
</body>
</html>