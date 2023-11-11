<?php


include "database_connection.php";




session_start();

if (isset($_SESSION['email'])) {

   

   ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Σελίδα Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin_page.css">

</head>
<body>


   
<div class="container">

   <div class="content">
   

      <h3>Γεια, <span>Admin</span></h3>
      
      <p>Σελίδα Admin</p>
      
      <a href="uploadfiles.php" class="btn">Ανέβασμα</a>
      <a href="deletefiles.php" class="btn">Διαγραφή</a>
      <a href="updatefiles.php" class="btn">Ενημέρωση</a>
      <a href="admin_logout.php" class="btn">Αποσύνδεση</a>
      <a href="chartss.php" class="btn">Γράφημα προσφορών</a>
      <a href="chartb.php" class="btn">Γράφημα μέσης τιμής</a>
      <a href="scoreboards.php" class="btn">Έλεγχος scoreboard</a>
      <a href="map_admin.php" class="btn">Χάρτης</a>
   </div>

</div>

</body>
</html>
<?php
}else{
     header("Location: index.php");
     exit();
}
 ?> 
