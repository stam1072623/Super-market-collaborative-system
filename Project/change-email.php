<?php 
session_start();
include "database_connection.php";

if(isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
    ?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Αλλαγή email</title>
        <link rel="stylesheet" type="text/css" href="main_style.css">
    </head>
    <body>
        <form action="change-e.php" method="post">
            
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <?php if(isset($_GET['success'])) { ?>
                <p class="success"> <?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label> New Email</label>
            <input type="text" name="newemail" placeholder="Νέο Email"><br>

            <button class="button" type="submit">Επιβεβαίωση αλλαγής.</button>
                <a href="testmap.php">Αρχικό μενού</a>
        </form>
    </body>
    </html>

    <?php
}
else
{
    header("Location: index.php");
    exit();
}