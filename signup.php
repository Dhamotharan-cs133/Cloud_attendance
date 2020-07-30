<?php
$servername = "18.188.68.50";
$username = "root";
$password = "12345678";
$database = "user";
$conn = new mysqli($servername, $username, $password, $database);


if(!$conn){
	echo"error";
}

if(isset($_POST['submit'])) {
$username=htmlentities($_POST['username']);
$mail_id=htmlentities($_POST['email']);
$mobile_no=htmlentities($_POST['mobile_number']);
$password=htmlentities($_POST['password']);
$con_password=htmlentities($_POST['con_password']);
if($password!=$con_password){
	$msg = 'failed';
} else {	
$sql="INSERT INTO `login`(`username`, `mail_id`, `mobile_no`,`password`) VALUES ('$username','$mail_id','$mobile_no','$password')";
$msg = 'success';
mysqli_query($conn,$sql);
}
header("location: login.php?msg=$msg");
}
?>