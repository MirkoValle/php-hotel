<?php

require_once __DIR__. '/hotels.php';




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>
</head>
<body>
    



<?php foreach ($hotels as $hotel) {
    foreach ($hotel as $value) {
        echo $value . "<br>";
        
    };
}
?>



</body>
</html>








