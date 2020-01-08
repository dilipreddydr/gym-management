<!DOCTYPE html>
<?php
session_start();
include 'includes/dbh.inc.php';

if (!isset($_SESSION['u_id']))
    {
     echo "<script>alert('you need to login.')</script>";
                   echo "<script>window.open('admin.php?err=please login','_self')</script>";
        die();
   
}


// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($conn, $query);



?>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
      
   
       
 <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active">Register Members</a>
                <a href="user_details.php" class="list-group-item">Member details</a>
                <a href="plans.php" class="list-group-item">Plan details</a>
                <a href="payment.php" class="list-group-item">Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="trainer.php" class="list-group-item active">Trainer</a>
            </div>      
            
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>first name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label>last name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label>email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Contact no</label>
<input type="text" name="contact" class="form-control"><br>        
 <label>Trainer </label> 
 <select class="form-control" name="trainer_id">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                    <label>Address</label>
                    <input type="text" name="address" class="form-control"><br>        
                                        
  <input type="submit" class="btn btn-primary" name="user_submit" value="Register">
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			      
				              <a href="includes/logout.inc.php?logout=true" class="btn btn-light"style="background-color:#3498DB;color:FFFFFF">Logout</a>
							
						
				
		       </div>
	 </div>
 </nav>

</header>
     

     </body>
    
</html>
   