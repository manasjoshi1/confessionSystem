<?php
include("includes/db.php");
  if(isset($_POST['signup'])){
    $userName=htmlentities(mysqli_escape_string($connection,$_POST['userName']));
    $userEmail=htmlentities(mysqli_escape_string($connection,$_POST['userEmail']));
    $userPassword=htmlentities(mysqli_escape_string($connection,$_POST['userPassword']));
    $userGender=htmlentities(mysqli_escape_string($connection,$_POST['userGender']));
    //$rand=rand(1,2);
    if($userName=="")
    {
      echo '<script>alert("Your Name Cant Be Verified")</script>';
    }
    if(strlen($userPassword)<8)
    {
      echo '<script>alert("Password must be of 8 charachters")</script>';
        echo '<script>window.open("signup.php","_self")</script>';
      exit();
    }
    $checkEmail="Select * from users where userEmail='$userEmail' or userName='$userName'";
    $runQuery=mysqli_query($connection,$checkEmail);
    if(mysqli_num_rows($runQuery)>0){
      echo '<script>alert("Username and Email Already Exists, please try again")</script>';
      echo '<script>window.open("signup.php","_self")</script>';
      exit();
    }
    if($userGender=='M'){
      $userPic="images/1.png";
    }

    if($userGender=='F'){
      $userPic="images/2.png";
    }
    //echo $userName."11";
    $userPassword=password_hash($userPassword, PASSWORD_BCRYPT);
    $query="insert into users (userName,userEmail,userPassword,userGender,userPic) values('{$userName}','$userEmail','$userPassword','$userGender','$userPic')";

    $runQuery=mysqli_query($connection,$query);
      if($runQuery){
        echo '<script>alert("Congratulations '.$userName.' your account has been created")</script>';
        echo '<script>window.open("index.php","_self")</script>';

      }
      else{
        die("Query Fail" .mysqli_error($connection));
        echo '<script>alert("Congratulations $userName your account has been created")</script>';
        echo '<script>window.open("signup.php","_self")</script>';
      }


  }

?>
