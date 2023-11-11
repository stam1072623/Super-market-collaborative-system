<?php
session_start();
include "database_connection.php";

if(isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $oldpass = $_POST['oldpassword'];
        $npass = $_POST['newpassword'];
        $cpass = $_POST['cpassword'];

        $uppercase = preg_match('@[A-Z]@', $npass);
        $number = preg_match('@[0-9]@', $npass);
        $symbol = preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $npass);
  

       

        if(empty($oldpass)) 
        {
            header("Location: change-password.php?error=Παρακαλώ πληκτρολογείστε τον παλιό κωδικό πρόσβασης.");
            exit();
        }else if(empty($npass))
        {
            header("Location: change-password.php?error=Παρακαλώ πληκτρολογείστε τον νέο κωδικό πρόσβασης.");
            exit();
        }else if($npass != $cpass)
        {
            header("Location: change-password.php?error=Οι δύο κωδικοί δεν ταιριάζουν μεταξύ τους.");
            exit();
        }else
        {
            $id = $_SESSION['user_id'];  
            $sql = "SELECT password FROM user WHERE user_id='$id' AND password='$oldpass'";
            $result = mysqli_query($conn,$sql);

            if (strlen($npass) < 8 || !$uppercase || !$number || !$symbol) 
            {
                header("Location: change-password.php?error=Ο νέος κωδικός πρέπει να περιέχει τουλάχιστον 8 χαρακτήρες, έναν κεφαλαίο, έναν αριθμό και ένα σύμβολο.");
                exit();
            } 
            else 
            {
                if(mysqli_num_rows($result) === 1) 
                {
                    $sqlchange = "UPDATE user SET password='$npass' WHERE user_id='$id'";
                    mysqli_query($conn,$sqlchange);
                    header("Location: change-password.php?success=Η αλλαγή του κωδικού πρόσβασης έγινε επιτυχημένα.");
                    exit();
                }
                else
                {
                    header("Location: change-password.php?error=Ο παλιός κωδικός πρόσβασης δεν βρέθηκε.");
                    exit();
                }
            }
        }
    }
}
else
{
    header("Location: index.php");
    exit();
}