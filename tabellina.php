<?php
echo "<table style='border: 1px solid black;'>";
for($a=1;$a<=10;$a++){
  echo "<tr>";
    for($b=1;$b<=10;$b++){
      echo "<td style='border: 1px solid red;'>".$a*$b."</td>";
        echo $a*$b;
    }
    echo "</tr>";
    echo "<br>";
    }
    echo "<table>";
?>
