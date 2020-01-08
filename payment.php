<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
             <div class="col-md-3"><h3>Payment Details</h3></div>
             </div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Payment ID </th>
            <th>Amount</th>
            <th>Plan Type</th>
            <th>Member Name</th>
            <th>Payed date</th>
         
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Make new Payment</h3>
 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
 
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"><br>
                    <label>Customer ID</label>
                    <input type="text" name="member_id" class="form-control"><br>
                    <label>Plan Type</label>
                    
<input type="text" name="plan_type" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
     </div>
    </div>
    </div>
    </div></div>
    

    </div>
    </body>
</html>