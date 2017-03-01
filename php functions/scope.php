<html>
<head>
    <title>Php function one</title>
</head>
<body>
<?php

$msg = "Good morning"; //global variable to the program

function greeting(){
    global $msg; //using a global variable to set a local variable
    $msg = "Good night"; //local variable to the function
}
echo $msg. "<br />";
greeting();
echo $msg. "<br />";

?>
</body>
</html>