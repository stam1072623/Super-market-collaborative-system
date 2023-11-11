<?php
session_start();
include "database_connection.php";

if(isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
    if(isset($_POST['newemail']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $new = validate($_POST['newemail']);

        if(empty($new)) 
        {
            header("Location: change-email.php?error=Παρακαλώ πληκτρολογείστε το καινούριο email.");
            exit();
        }
        else
        {
            $id = $_SESSION['user_id']; 
            $email = $_SESSION['email'];
            $sql = "SELECT email FROM user WHERE user_id='$id' AND email='$email'";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result) === 1) 
            {
                $sqlchange = "UPDATE user SET email='$new' WHERE user_id='$id'";
                mysqli_query($conn,$sqlchange);
                $_SESSION['email']=$new;
                header("Location: change-email.php?success=Η αλλαγή του email ήταν επιτυχημένη.");
                exit();
            }
            else
            {
                header("Location: change-email.php?error=Ο χρήστης με αυτό το email δεν βρέθηκε.");
                exit();
            }
        }
    }
    else
    {
        header("Location: change-email.php");
        exit();
    }
}
else
{
    header("Location: index.php");
    exit();
}