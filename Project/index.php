<!DOCTYPE html>
<html>
<head>
	<title>ΕΙΣΟΔΟΣ</title>
	<link rel="stylesheet" type="text/css" href="main_style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>ΕΙΣΟΔΟΣ</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="email" placeholder="Email"><br>

     	<label>Κωδικός</label>
     	<input type="password" name="password" placeholder="Κωδικός"><br>

     	<button type="submit">Είσοδος</button>
          <a href="signup.php" class="ca">Φτιάξε λογαριασμό</a>
     </form>
</body>
</html>