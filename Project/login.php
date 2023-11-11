<?php
session_start();
include "database_connection.php";

$login_error = ''; 

if(isset($_POST['email']) && isset($_POST['password']))
{
    function validate($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email)) 
    {
        header("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)) 
    {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'"; 

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
    while ($row = mysqli_fetch_assoc($result))                            {
    if($row['email'] === $email && $row['password'] === $pass) {

         if($row['admin']==0){
            echo "You are now logged in user.";
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: testmap.php");
            exit();           
}
         else{
            echo "You are now logged in admin.";
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: admin_page.php");
            exit();           
}

        }
        else
        {
            header("Location: index.php?error=Incorrect User Name or Password. Please try again or sign up1");
            exit();
        }
    }
    }
    else
    {
        header("Location: index.php?error=Incorrect User Name or Password. Please try again or sign up2");
        exit();
    }

}
else
{
    header("Location: index.php");
    exit();
}
?>