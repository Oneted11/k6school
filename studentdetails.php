<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mainstyle.css">
	<title>student details</title>

</head>
<body>
<h1>K-6 High School</h1>
<ul>
	<li><a href="home.html">Home</a></li>
	<li><a href="login.html">login</a></li>
	<li><a href="history.html">School History</a></li>
	<li><a href="contact.html">Contact Us</a></li>
	</ul>
<?php 
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
//$gender=$_POST['gender'];
$gender="male";
$english=$_POST['english'];
$math=$_POST['math'];
$swa=$_POST['swa'];
$bio=$_POST['bio'];
$chem=$_POST['chem'];
$phyc=$_POST['phyc'];
$histo=$_POST['histo'];
$geo=$_POST['geo'];
$cre=$_POST['RE'];

$pass=$_POST['password'];
$passW=md5($pass);


$conn=mysqli_connect("Localhost","root","");
$sel=mysqli_select_db($conn,"k6school");
if(!$sel){

	echo "Could not select";
}

$net=mysqli_query($conn,"INSERT INTO studentDetails(admNo,fName,lName,dob,gender,english,swa,math,bio,chem,
	phyc,histo,geo,re,passwrd) 
	VALUES(Null,'$fname','$lname','$dob','$gender','$english','$math','$swa','$bio','$chem','$phyc','$histo','$geo','$cre','$passW')");
if(!$net){


	echo"<script>alert('Could not register you');</script>";
}
}




?>
<form method="post">
<fieldset><legend>student information</legend>
	first name:  <input type="text" name="fname">
	last name:  <input type="text" name="lname"><br><br>
	Date of Birth: <input type="date/time" name="dob"><br><br>
	female: <input type="radio" name="gender" value="female">
	male: <input type="radio" name="gender" value="male">

</fieldset>
<fieldset><legend>perfomance</legend>
	English:<input type="number" name="english"><br>
	Mathematics:<input type="number" name="math"><br>
	Kiswahili:<input type="number" name="swa"><br>
	Biology:<input type="number" name="bio"><br>
	Chemistry:<input type="number" name="chem"><br>
	Physics:<input type="number" name="phyc"><br>
	History:<input type="number" name="histo"><br>
	Geography:<input type="number" name="geo"><br>
	Password:<input type="text" name="password"><br>
	Religious Education:<input type="number" name="RE"><br>
	<input type="submit" name="submit">
</fieldset>

</form>

</body>
</html>