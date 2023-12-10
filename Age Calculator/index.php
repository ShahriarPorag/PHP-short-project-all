<?php

$birthdate = new DateTime("09/11/1999");
$todate = new Datetime();
echo $todate->format("d/m/y");
echo "</br> #############</br>";

$age = $todate->diff($birthdate);
echo $age->format("my age is %Y years, %m Months, %d days old");

?>