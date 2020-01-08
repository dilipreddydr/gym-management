<!DOCTYPE html>
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
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
        
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/cardback.jpg" class="card-img-top">
            <div class="card-body">
              <center>
              <h5>Admin Login</h5><br>
              <form class="form-group" method="post" action="includes/login.inc.php">
                  <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong><?php if(isset($_GET['err'])){ $err=$_GET['err']; echo $err;} else{echo 'Welcome';} ?></strong></div><br>
                  <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center><input type="submit" id="inputbtn" name="login" value="login" class="btn btn-primary"></center>
              </form>
            
              
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>

  </body>
</html>