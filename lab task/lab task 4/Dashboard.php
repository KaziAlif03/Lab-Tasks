<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
	<img src="image1.jpg" align="top" height="150" width="300"/>
<body>


<?php
session_start(); 
if (isset($_POST['uname'])) {
  if ($_POST['uname']==$username && $_POST['pass']==$password) {
    $_SESSION['uname'] = $username;
    header("location:Dashboard.php");
  }
  else{
    $msg="username or password invalid";
    echo "<script>alert('uname or pass incorrect!')</script>";
  }

} 

?> 

 
    
     <fieldset>
 <h3 align="center">Account</h3><br />
	<ul><li><a href="dboard.php">Dashboard</a></li>
		<li><a href="ViewProfile.php">View Profile</a></li>
		<li><a href="EditProfile.php">Edit Profile</a></li>
		<li><a href="ChangePic.php">Change Profile Profile</a></li>
		<li><a href="ChangePassword.php">Change Password</a></li>
		<li><a href="logout.php">Logout</a></li>
		</li></ul>
		<?php include 'footer.php'; ?>
		</fieldset>


</body>
</html>
