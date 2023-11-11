<?php //Arxeio gia syndesh sth vash dedomenwn
  
   $sname = "localhost:3307";
   $uname = "root";
   $password = "";

   $db_name = "web_project";

   $conn = mysqli_connect($sname, $uname, $password, $db_name);

   if(!$conn)
   {
    echo "Connection to database failed.";
   }