<datalist id="name">
<?php
//echo $userLoggedinEmail;
$query="SELECT userName from users where userName!='$confessedBy';";
$resultQuery=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($resultQuery)){
  $state=$row['userName'];
  $state=ucfirst(strtolower($state));
  echo "<option value={$state}>";
}
?>