<?php
session_start();
include "database_connection.php";

if(isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
    if(isset($_POST['newusername']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $newname = validate($_POST['newusername']);

        if(empty($newname)) //Elegxos an exei dwthei to neo username
        {
            header("Location: change-username.php?error=Παρακαλώ πληκτρολογείστε το νέο όνομα χρήστη.");
            exit();
        }
        else
        {
            $id = $_SESSION['user_id']; //An exei dwthei tote arxikopoihse metavlhtes me ta yparxwn id, username kai epelexe toys xrhstes apo th vash me ayto to id kai username
            $uname = $_SESSION['username'];
            $sql = "SELECT username FROM user WHERE user_id='$id' AND username='$uname'";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result) === 1) 
            {
                $sqlchange = "UPDATE user SET username='$newname' WHERE user_id='$id'";
                mysqli_query($conn,$sqlchange);
                $_SESSION['username']=$newname;
                header("Location: change-username.php?success=Η αλλαγή ονόματος χρήστη ήταν επιτυχημένη.");
                exit();
            }
            else
            {
                header("Location: change-username.php?error=Δεν βρέθηκε χρήστης με αυτό το όνομα χρήστη.");
                exit();
            }
        }
    }
    else
    {
        header("Location: change-username.php");
        exit();
    }
}
else
{
    header("Location: index.php");
    exit();
}