<?php 
$found = false;
$arr = [
    [1,2,3,4,"Shihab", "kamal", 3.25, 90],
    [10,20,30,40,"Sakib", "jamal", 3.255, 900],
    [100,200,300,400,"rakib", "salam", 3.259, 9000],
];
$e = "nafis";
foreach ($arr as $a1)
{ 
    foreach($a1 as $s)
    //echo $s . "<br>";
    if($e == $s)
    {
        $found = true;
        break;
    }

}
if($found == true)
{
    echo "yes";
}
else
{
    echo "No";
}



?>