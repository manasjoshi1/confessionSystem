<?php

if(isset($_POST['postConfession'])) 
{	
	$confessTo=$_POST['confessTo'];
	$confessedBy=$_POST['confessedBy'];
	$confession=$_POST['confession'];
	$query="Insert into confessions (confessedBy,confessTo,confession,confessTime) values('$confessedBy','$confessTo','$confession',now())";
	$runQuery=mysqli_query($connection,$query);
	if(!$runQuery)
		die("Query Fail" .mysqli_error($connection));
		
	else{
			echo "<script>alert('Successfully Confessed');</script>";
			header("Location: home.php");
				exit;
		}

}

?>