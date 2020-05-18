<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create New Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>
    <div class="signup-form">
      <form class="" action="" method="post">
        <?php
        include("includes/signupFunction.php")?>
        <div class="form-header">
          <h2>Sign Up</h2>
          <p>Sign Up To Start Confessing</p>
        </div>
        <div class="form-group">
          <label >Username</label>
          <input type="text" class="form-control"name="userName" placeholder="Manas" required>
        </div>
        <div class="form-group">
          <label >Email</label>
          <input type="email" class="form-control"name="userEmail" placeholder="someone@site.com" required>
        </div>
        <div class="form-group">
        <label >Password</label>
          <input type="password"  class="form-control"name="userPassword" placeholder="Password" required>
        </div>
        
        <div class="form-group">
          <label >Gender</label>
          <select class="form-control" name="userGender">
            <option disabled selected>Select Your Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
        </div>
        <div class="form-group">
            <label class="checkbox-inline">
              <input type="checkbox" name="" value=""required> I accept the  <a href="tnc.php">Terms & Conditions</a> &amp; <a href="pp.php">Privacy Policy</a>
            </label>
        </div>
        <div class="form-group">
          <input  class=" btn btn-primary btn-lg" type="submit" name="signup" value="Sign Up">
        </div>
      <div class="text-center small" style="color:white;"> Have an Account? <a href="index.php">Login</a>

      </form>

      </div>

    </div>
  </body>
</html>
