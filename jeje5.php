<?php
echo "<h1>Conversor de Euros a Pesetas</h1>";
define('pesetas',166.386);
echo "<table border='2 black solid'>";
 echo "<tr><td>Euros</td><td>Pesetas</td></tr>";
for($euro=1;$euro<=10;$euro++){
echo "<tr>";
if ($euro%2==0) {
echo "<td>$euro €</td> <td>".pesetas*$euro." pts</td>";
}else
{
echo "<td>$euro €</td> <td>".pesetas*$euro." pts</td>";
}
echo "</tr>";
}
echo"</table>";
?>