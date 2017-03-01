<html>
<head>
    <title>Default argument in php function</title>
</head>
<body>
<?php

function message($name = "User"){
    echo "Hello {$name} ! How are you doing?";
}
message("Felix");

?>
</body>
</html>