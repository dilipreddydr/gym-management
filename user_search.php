<html>
<head>
	<title>Member details</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
include("func.php");
if(isset($_POST['user_search_submit']))
{
    $ser=$_POST['search'];
     $query="select * from users where fname like '%$ser%' or lname like '%$ser%'";
    $result=mysqli_query($conn,$query);
    if($result){
    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class'card'>
    <div class='card-body'><a href='user_details.php' class='btn brn-light'>Go Back</a></div>
    <img src='images/1.jpg'>
    <table class='table table-hover'>
        <thead>
     <tr>
            <th>First name</th>
            <th>Last name</th>
         <th>Email id</th>
         <th>Contact</th>
         <th>Trainer ID</th>
        </tr>   
        </thead>
        <tbody>
        </div></div>";
    while ($row=mysqli_fetch_array($result)){
          $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
        $tr=$row['trainer_id'];
        echo " <tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
                <td>$tr</td>

        </tr>";
        }
        echo "</tbody></table></div></div></div>";
} else{ echo"error".$query."<br>".$conn->error;}

}
    ?>
    
    </body>
        </html> 