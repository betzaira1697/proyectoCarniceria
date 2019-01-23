<?php
  $host="160.153.43.65";
  $database="modulo3";
  $user="hector";
  $psw="N3VERm0re2018@";
  $db=new mysqli($host,$user,$psw,$database);
  if($db->connect_error>0)
     die("Error de conexion [".$db->connect_error."]");
  //else
     //echo "conexion correcta";
?>