<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

    $mobile_number = stripcslashes($_REQUEST['mobile_number']);
    $mobile_number = mysqli_real_escape_string($con, $mobile_number);

    $gender = stripcslashes($_REQUEST['gender']);
    $gender = mysqli_real_escape_string($con, $gender);
	// $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, mobile_number, gender)
VALUES ('$username', '".md5($password)."', '$email', '$mobile_number', '$gender')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">

<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="mobile_number" placeholder="Mobile number" required />
<select required name="gender">
    <option value="">None</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>