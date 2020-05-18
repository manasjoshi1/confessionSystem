<?php
$confessedBy=$_SESSION['userEmail'];	
$query="SELECT userName,userPic from users where userEmail='$confessedBy';";
   	$resultQuery=mysqli_query($connection,$query);
   	while($row=mysqli_fetch_assoc($resultQuery)){
     	$confessedBy=$row['userName'];

     	$confessedBy=ucfirst(strtolower($confessedBy));

   }
$query="Select confession,confessTime From confessions where confessTo='$confessedBy' order by confessTime DESC";
$runQuery=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($runQuery)){
	$confession=$row['confession'];
	$confessTime=$row['confessTime'];
	echo "<tr>
      <td>'$confession'</td>
      <td>$confessTime</td>
    </tr>";
}
if(!$runQuery){
	die(mysqli_error($connection));
}
?>