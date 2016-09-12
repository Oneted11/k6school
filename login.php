<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/mdb.css">
	<title>login</title>
	<style type="text/css">
		input{margin:7px;}
		body{text-align: center;}
	</style>
</head>
<body>
<h1>Staff Login</h1>
<?php
if(isset($_POST['submit'])){
	$user=$_POST['userName'];
	$passw=$_POST['userPassword'];
	$passo=md5($passw);
$conn=mysqli_connect("Localhost","root","");
$sel=mysqli_select_db($conn,"k6school");
$net=mysqli_query($conn,"SELECT * FROM teacher where userName='$user' and password='$passo'");
$result=mysqli_num_rows($net);
if($result==0){
echo"<script>alert('Could not Login  you');</script>";

}
else{
echo"<script>alert('Successfully Logged in');</script>";
header('Location:studentdetails.php');
}

}
	?>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<form method="post">
	user name:<input type="text" name="userName"><br>
	password:<input type="password" name="userPassword"><br>
<input type="submit" name="submit"/>
</form>
</div>
</div>
</body>
</html>