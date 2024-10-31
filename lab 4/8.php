<?php

$student = 
[
   [1,2,3,'A'],
   [1,2,'B','C'],
   [1,'D','E','F']
];


    echo "<table border=1 cellspacing = 0 align = 'center'>";

        echo "<tr height = '20px'>";

             echo "<td width =150x>";
                echo 'The array to declare';
             echo "</td>";

            echo "<td width =150x>";
                echo 'Shapes to print';
            echo "</td>";   

        echo "</tr>";


        echo "<tr height = '100px'>"; 

            echo "<td width =150x>";
                echo "<table border=1 cellspacing = 0 align = 'center'>";

                 for($i=0;$i<count($student);$i++)
                {
                echo "<tr>";
                    for($j=0;$j<4;$j++)
                   {
                    echo "<td width =20px>";
                    echo $student[$i][$j];
                    echo "</td>";
    
                   } 
                echo "</tr>";
                }
    
                 echo "</table>";

            echo "</td>";

            echo "<td width =150x>";

            echo "<table border=1 cellspacing = 0 align = 'center'>";

    echo "<tr >";

    echo "<td width = '200px'>";
    for ($i = 3; $i > 0; $i--) {
         for ($j = 1; $j <= $i; $j++) {
             echo "{$j} ";
         }
         echo "<br>";
     }
     echo "</td>";



     echo "<td width = '200px'>";
    $char = "A";
     for ($i = 0; $i < 3; $i++) {
         for ($j = 0; $j <= $i; $j++) {

             echo $char . " ";
             $char++;
         }
         echo "<br>";
     }
     echo "</td>";

    echo "</tr>";

    echo "</table>";








    echo "</td>";
    echo "</tr>";
            
            echo "</td>";   
        echo "</tr>";
    echo "</table>";
?>