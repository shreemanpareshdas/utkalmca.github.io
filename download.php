<?php 
$fils=$_GET['file'] . ".pdf" ;
header("content-disposition:attachment; filesname=".urlencode($fils));
$fb=fopen($fils,"r");
 while(!feof($fb)){
     echo fread($fb,8192);
     flush();
 }
 fclose($fb);
?>