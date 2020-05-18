<?php
   include "includes/db.php";
   if(!isset($_SESSION['userEmail']))
   {
     header("Location:index.php");
   }
   else {
   	$confessedBy=$_SESSION['userEmail'];	
   	$query="SELECT userName,userPic from users where userEmail='$confessedBy';";
   	$resultQuery=mysqli_query($connection,$query);
   	while($row=mysqli_fetch_assoc($resultQuery)){
     	$confessedBy=$row['userName'];
     	$userPic=$row['userPic'];
     	$confessedBy=ucfirst(strtolower($confessedBy));

   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title><?php echo $confessedBy;?>'s Confession</title>
   </head>
   <body>

      <form class="" action="" method="post" onsubmit="return validateForm()">
        <?php  include "includes/addConfession.php";?>

         <div class="row">
            <div class="col-xl-12">
               <div class="card spur-card">
                  <div class="jumbotron jumbotron-fluid">
                     <div class="container">
               	<div class="form-row">
               		<div class="form-group col-md-8">
					 <h1 class="display-4">Hey!  <?php echo $confessedBy;?> </h1>
                    </div>

					 <div class="form-group col-md-4">
					<img class="bd-placeholder-img rounded-circle" width="150" height="150" src="<?php echo"$userPic"?>"> 
                    </div>
                    </div>
                        <p class="lead">Select the person you want to confess for and Confess</p>
                    	 <div class="card-body ">
                           <div class="form-group col-md-4">
                              <label>Confess To</label>
                              <input autocomplete="off" type="text" class="form-control" id="confessTo" name="confessTo" list="name">
                              <?php include "includes/requiredDropDowns.php";?> 
                           </div>
                           <div class="form-group col-md-4">
                              <label>Confession</label>
                              <input  autocomplete="off" type="text" class="form-control"name="confession" id="confession" >
                           </div>
                           <input  autocomplete="off" type="hidden" name="confessedBy" value="<?php echo $confessedBy;?>">
                           <div class="form-group col-md-4">
                              <input type="submit" class="btn btn-primary btn-large" name="postConfession"  >
                           </div>
                     	</div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </form>
       
       <div class="jumbotron jumbotron-fluid">
                     <div class="container">
                        <h1 class="display-4">Confessions For You</h1>
                        <p class="lead">These are some anonymous confesions</p>
                    	 <table class="table table-bordered table-striped">
  							<thead>
  								<tr>
								      <th scope="col">Confession</th>
								      <th scope="col">Date</th>

							    </tr>
							</thead>
							     <?php  include "includes/viewConfession.php";?>

						</table>
						 <form class="" action="" method="post" onsubmit="return confirmLogout()" >
	     			 <button type="submit" class="btn btn-danger" name="logout">Logout</button>

         			 </form>
                     </div>

                  </div>
                  
                 

      <?php  if(isset($_POST['logout']))
      {
        header("location:logout.php");
        exit();
      } ?>
   </body>
</html>
<?php }?>
<script type="text/javascript">
	function validateForm(){
		var x=document.getElementById("confession").value;
		var y= document.getElementById("confessTo").value;
		if(x.trim()==""||y.trim()==""){
			alert("Please Fill Both The Fields");
  		 return false;

		}
			if(confirm("Submit the confession?")){
				return true;}
			
		return false;
	
}	
function confirmLogout(){
		if(confirm("Logout?")){
			
  		 return true;

	}
	return false;
}
</script>