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
             <div class="col-md-3"><h3>Members Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="user_search.php" method="post">
          <div class="row">
   <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter name"></div>
              <div class="col-md-2"><input type="submit" name="user_search_submit" class="btn btn-light" value="Search"> </div></div>           
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
         <th>Member ID</th>
            <th>First Name</th>
            <th>Last Name</th>
         <th>Email id</th>
         <th>Contact</th>
         <th>Address</th>
         <th>Trainer name</th>
         <th>inactivate</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_user_details(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    </div>
    </body>
</html>