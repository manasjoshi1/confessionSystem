<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/signin.css">
  </head>
  <body>
    <div class="signin-form">
      <form class="" action="" method="post">
        <?php  include "includes/signinFunction.php";?>
        <div class="form-header">
          <h2>Sign In</h2>
          <p>Let's Confess</p>
        </div>
        <div class="form-group">
          <label >Email</label>
          <input type="email" class="form-control"name="userEmail" placeholder="someone@site.com" required>
        </div>
        <div class="form-group">
        <label >Password</label>

          <input type="password"  class="form-control"name="userPassword" placeholder="Password" required>
        </div>
        <div class="small">Forgot Password ?<a href="forgot_pass.php">Click Here</a> </div><br>
        <div class="form-group">
          <input  class=" btn btn-primary btn-lg" type="submit" name="signin" value="Login">
        </div>
      <div class="text-center small" style="color:white;">Don't Have an Account? <a href="signup.php">Create One</a>

      </form>

      </div>

    </div>
  </body>
</html>
