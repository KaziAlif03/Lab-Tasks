<!DOCTYPE html>
<html>
<head>
	<fieldset>
	
	<title></title>
	
 

<?php 
     session_start() ;
     ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Title of the document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<img src="image1.jpg" align="top" height="150" width="300"/>
	<ul><li><a href="Welcome.php"text-align="right">Home</a></li>
		<li><a href="login.php" align="right">Login</a>
		<li><a href="Registration.php" align="right">Registration</a>
		</li></ul>

<fieldset>
<?php
  $_SESSION['username']="Welcome to ABC company";
  echo $_SESSION['username'];




?>
</fieldset>
<?php include 'footer.php'; ?>

</fieldset>
</body>
</html>
