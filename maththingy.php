<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" href="mathcss.css">
 </head>
 <body>

   <table>
     <tr>
       <th id="one">Number</th>
       <th id="two">kwadr</th>
       <th id="three">macht</th>
     </tr>
   <?php

$values = array();

for ($x = 0; $x < 10; $x++) {

 echo "<tr>";
 echo "<td>".pow($x+1,1)."</td>";
 echo "<td>".pow($x+1,2)."</td>";
 echo "<td>".pow($x+1,3)."</td>";
 echo "</tr>";

}

?>

</table>
 </body>
</html>