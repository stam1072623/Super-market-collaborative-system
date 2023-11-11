<?php
   include "database_connection.php";
   $message = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = ($_POST['cpassword']);

    $upperCase = preg_match('/[A-Z]/', $password);
    $number = preg_match('/\d/', $password);
    $symbol = preg_match('/[!@#\$%^&*()_+\-=]/', $password);
    $length = strlen($password) >= 8;

    if (!$upperCase || !$number || !$symbol || !$length) {
        $message = "Ο κωδικός δεν πληροί τα απαραίτητα κριτήρια.";
    } else if($password !== $cpassword) {
        header("Location: signup.php?error");
        if(isset($_GET['error'])){
           $message = "Δεν ταιριάζουν οι κωδικοί μεταξύ τους";
           echo $message;
	   exit();
        }
    }else{
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error");
            if(isset($_GET['error'])){
                  $message = "Το όνομα χρήστη χρησιμοποιείται, δοκίμασε ένα άλλο.";
                  echo $message;
	          exit();
            }
        } else {
            $insert = "INSERT INTO user (email, password, username) VALUES ('$email', '$password', '$username')";
            $result2 = mysqli_query($conn, $insert);

            if ($result2) {
                header("Location: index.php?success");
                if(isset($_GET['success'])){
                    $message = "Επιτυχής εγγραφή.";
                    echo $message;
	            exit();
                }
            } else {
                $message = "Η εγγραφή απέτυχε. Προσπαθείστε ξανά.";
            }
        }
    }
         
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Εγγραφή</title>
	<link rel="stylesheet" type="text/css" href="main_style.css">
</head>
<body>
     
     <form action="signup.php" method="post">
     	<h2>Εγγραφή</h2>
          <label>Όνομα Χρήστη</label>
        <input type="text" name="username" placeholder="Όνομα Χρήστη" required>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required>
        <label>Κωδικός</label>
        <input type="password" id="password" name="password" placeholder="Κωδικός" onkeyup= "return validatepassword()" required><br>
        <p id="passwordError" ></p>

          <label>Επαλήθευση Κωδικού</label>
          <input type="password" name="cpassword" id="cpassword"placeholder="Επαλήθευση Κωδικού"onkeyup="return confirmm()" required><br>

                
                 
                 
                 <ul>
                    <li id="upperCase">Τουλάχιστον ένα κεφαλαίο</li>
                    <li id="symbol">Τουλάχιστον ένα ειδικό σύμβολο</li>
                    <li id="number">Τουλάχιστον έναν αριθμό</li>
                    <li id="length">Τουλάχιστον 8 χαρακτήρες</li>
                </ul>
          <button type="submit">Εγγραφή</button>
         
          <a href="index.php" class="ca">Έχεις ήδη λογαριασμό;</a>
     
          </form>
         <p class="signup-message" id="signupMessage"><?php echo $message; ?></p>
                
         <script src="passwordcheck.js"></script>
     	
        
</body>
</html>