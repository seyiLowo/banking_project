 <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  <form action="delete_user.php" method="post">
  	<input type="text" name="delete_email"><br />
  	<button type="submit">Delete</button>
  	<br />
  	<br />
  	<br />
  	<input type="text" name="nfirstname"><br />
  	<input type="text" name="nlastname"><br />
  	<input type="text" name="nemail"><br />
  	<input type="text" name="npassword"><br />
  	<button type="submit">Update</button>
  </form>

  <?php session_start();
  require('conn.php');
  echo $_SESSION['email'];
  ?>
  </body>
  </html>