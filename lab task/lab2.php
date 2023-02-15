<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = $degreeErr= "";
$name = $email = $gender = $website = $degree= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Information Form</h2>
<p><span class="error">*Fillup properly all field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">*  <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">*  <?php echo $emailErr;?></span>
  <br><br>
  Date-Of-Birth: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <input type="radio" name="ssc" value="ssc">SSC
  <input type="radio" name="hsc" value="hsc">HSC
  <input type="radio" name="BSC" value="bsc">BSC
  <input type="radio" name="MSC" value="msc">MSC
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  Blood Group:
  
<select name="formBlood">
  <option value="">Select...</option>
  <option value="M">AB+</option>
  <option value="F">AB-</option>
  <option value="M">B+</option>
  <option value="F">B-</option>
  <option value="M">O+</option>
  <option value="F">O-</option>
</select>
<br>
<br>
<br>
  <input  font size ="50px" type="submit" name="submit" value="Submit">  
  
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
?>

</body>
</html>