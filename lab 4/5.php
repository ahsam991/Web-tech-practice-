<?php 
$count = 0;
for ($i = 10; $i <= 100; $i++)
{
    if($i%2 == 1)
    {   $count++;
        echo $count . "= ". $i . "<br>";
        
    }
}


?>