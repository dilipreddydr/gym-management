<!DOCTYPE html>
<?php
    include 'func.php';
    
    
    
    ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
    
  <body style="background:url('images/4.jpg'); background-size: cover;">

    <div class="container">
        <div class="page-header">
        <h1 style="color:red;">Active Plans</h1>
        </div>
  <div class="card-deck">
    
       <?php get_pln(); ?>
      
  </div>
</div>
      <div class="container">
          <h1 style="color:red;">Recent reviews</h1>
  <div class="card-deck">
      
          <?php get_reviews(); ?>
          </div></div>
      <br><br>
      
      
      
      
      
      <div class="container">
            <div class="card-deck">

<div class="card bg-primary text-black" >
    <div class="card-header"><h3>Address</h3></div>
    <div class="card-body bg-white">Muthanallur circle,Anekal taluk,<br>Banglore-560099<br><b>Phone:</b>+919876543201</div>
    
<img class="card-img-bottom" src="images/gym.JPG" alt="Card image" style="width:100%">

  </div>
          <div class="card bg-primary text-black" >
              <div class="card-header"><h3>Write your Review</h3></div>
              <div class="card-body bg-white">
  <form action="func.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="review">Your Review:</label>
      <textarea class="form-control" rows="5" name="rev" placeholder="Enter review" name="text"></textarea>
      </div>
    <button type="submit" name="rev_sub" class="btn btn-info">Submit</button>
          </form>
          </div>
                </div></div></div>
  </body>
</html>