<?php 
date_default_timezone_set("America/New_York");
echo date('r');
echo "<p>+4 week: ".date('r', strtotime("+4 week"))."</p>";
echo "<p>-4 week: ".date('r', strtotime("-4 week"))."</p>";

?>
