<?php

$vt_server="localhost";
$vt_user="root";
$vt_password="";
$vt_name="itsmevsyellow";

$connect=mysqli_connect($vt_server="localhost",$vt_user="root",$vt_password="",$vt_name="itsmevsyellow");

if(!$connect)
{
  die("database connection failed".mysqli_connect_error());
}


?>