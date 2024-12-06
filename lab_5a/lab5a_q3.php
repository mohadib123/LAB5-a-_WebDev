<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    
    function calculateArea($length, $width) {
        return $length * $width;
    }

  
    $length = 10; 
    $width = 3;   
    $area = calculateArea($length, $width);

    
    echo "<h2>Area of a Rectangle</h2>";
    echo "Length: $length<br>";
    echo "Width: $width<br>";
    echo "Area: $area<br>";
    ?>
</body>
</html>
