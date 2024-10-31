<!DOCTYPE html>
<html>
<head>
    <title>HTML form</title>
</head>
<body>
    <form method="GET" action="" enctype="">
        length: <input type="number" name="Length" value="" ><br>
        width: <input type="number" name="Width" value="" ><br>
                  <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html>




<?php

$length ;
$width ;
$area;
$perimeter;


$length = $_GET['Length'];
$width = $_GET['Width'];

echo "The are of Rectangle is = " . $length * $width . "<br>";
echo "The Perimeter of a rectangle = " . 2*($length+$width) . "<br>";

?>

