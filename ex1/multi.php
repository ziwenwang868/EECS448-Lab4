<?php
echo "<h1>Multiplication Table</h1>";
echo "<table>";
   for($x=0;$x<=100;$x++)
   {
     echo "<tr>";
     for($y=0;$y<=100;$y++)
     {
       if($x==0 and $y==0)
       {
         echo "<td>"."</td>";
       }
       else if ($x==0) {
         echo "<td>" .$y."</td>" ;
       }
       else if ($y==0) {
         echo "<td>".$x."</td>" ;
       }
       else {
         echo "<td>" .$x*$y ."</td>";
       }

     }
     echo "</tr>";
   }
   echo "</table>";

?>
