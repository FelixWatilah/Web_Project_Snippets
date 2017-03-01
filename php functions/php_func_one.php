<html>
<head>
    <title>Php function one</title>
</head>
<body>
<?php

//function without parameters
function hello_world(){
    echo "Hello world <br />";
}
hello_world();

//function with parameters
function power($power){
    echo "2 to power of ".$power." is: ".pow(2,$power);
}
power(8);

?>
</body>
</html>