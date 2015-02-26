<?php
$x=$_GET['xpos'];
$y=$_GET['ypos'];
$sessionid=$_GET['sessionID'];
$stringa=$x.",".$y.",".$sessionid;
$descrittore= fopen("mosse.txt","a+");
fwrite($descrittore,"$stringa\r\n");
fclose($descrittore);
?>