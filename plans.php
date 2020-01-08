<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3>Active Plans</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Package ID </th>
            <th>Plan Name</th>
         <th>Amounts</th>
         <th>Discount</th>
                  <th>Delete</th>

         
        </tr>   
        </thead>
        <tbody>
          <?php get_plans(); ?>
        </tbody>
    </table>
    
     </div>
    </div>
    </div>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Add new Plan</h3>
 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post" enctype="multipart/form-data">
                    <label>Image</label>
                    <input type="file" name="img" class="form" required><br>
                    
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control" required><br>
                    <label>Plan name</label>
                    <input type="text" name="plan" class="form-control" required><br>
                    <label>No of months</label>
                    <input type="text" name="month" class="form-control" required><br>
                    <label>Discount specifications</label>
                    <input type="text" name="discount" class="form-control"><br>
<input type="submit" class="btn btn-primary" name="plan_submit" value="ADD">
     </div>
    

    </div>
    </body>
</html>