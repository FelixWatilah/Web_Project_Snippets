<html>
<head>
    <title>Return php function</title>
</head>
<body>
<?php

function hypotenuse($base, $per){
    return sqrt($base*$base + $per*$per);
}
echo "Hypotenuse: ".hypotenuse(12,5);

?>
</body>
</html>