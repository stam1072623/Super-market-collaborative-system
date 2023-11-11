<?php
error_reporting(E_ERROR);
session_start();
include "database_connection.php";

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $id = $_SESSION['user_id']; 
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $sqlemail = "SELECT * FROM user WHERE username='$username' AND email='$email'";
    $result = mysqli_query($conn,$sqlemail);
    $row = mysqli_fetch_assoc($result);
    $sqloffer = "SELECT * FROM offer WHERE user_id='$id'";
    $offer = mysqli_query($conn,$sqloffer);
    $offer_row = mysqli_fetch_assoc($offer);
    
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="profile_style.css">
    </head>
    <body>
        <h1>Γεια σου <?php echo $_SESSION['username']; ?>, αυτή είναι η σελίδα του προφίλ σου. </h1>
        <p>Εδώ μπορείς να αλλάξεις το όνομα χρήστη, τον κωδικό ή το email σου.</p>
        
        <div class="profile-info-container">
           <h2>Πληροφορίες χρήστη.</h2>
           <ul>
              <li>Όνομα χρήστη: <?php echo $_SESSION['username']; ?></li>
              <li>Email: <?php echo $_SESSION['email']; ?></li>
              <li>Tokens: <?php echo $row['token']; ?></li>
              <li>Συνολικό score: <?php echo $row['score']; ?></li>
              <li>Μηνιαίο score: <?php echo $row['score_history']; ?></li>
              <li>Καταχωρημένες προσφορές: <?php if($offer_row['offerdate']===NULL){
       echo "Δεν υπάρχουν καταχωρημένες προσφορές.";
    }else{echo $offer_row['offerdate'];} ?></li>
          </ul>
        </div>
        <nav> 
            <a href="change-username.php">Αλλαγή ονόματος χρήστη</a>
            <a href="change-email.php">Αλλαγή email</a>
            <a href="change-password.php">Αλλαγή κωδικού πρόσβασης</a>
            <a href="testmap.php">Αρχικό μενού</a>
        </nav>
    </body>
    </html>

    <?php
}
else
{
    header("Location: index.php");
    exit();
}