<?php
include "db.php";


if(isset($_POST['signin'])) 
{
	$userEmail=$_POST['userEmail'];
	$userPassword=$_POST['userPassword'];
	//$hashPassword = password_hash($userPassword, PASSWORD_BCRYPT);
	$query="Select * from users where userEmail='$userEmail'";
	$runQuery=mysqli_query($connection,$query);
	if(!$runQuery)
		die("Query Fail" .mysqli_error($connection));
	$passwordCorrect="";
	while($row=mysqli_fetch_assoc($runQuery)){
		$userEmailDB=$row['userEmail'];
		$userPasswordDB=$row['userPassword'];
		$passwordCorrect = password_verify($userPassword, $userPasswordDB);
	}
	if($passwordCorrect){
		$_SESSION['userEmail']=$userEmail;
		$confessedBy=$_SESSION['userEmail'];

      	echo "<script>window.open('home.php','_self' )</script>";
		}
		
	else{
			    echo "    <div class='alert alert-danger'>      <strong>Check Your Credentials</strong>    </div>";

		}

}

?>