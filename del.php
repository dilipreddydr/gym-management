<?php
    include 'includes/dbh.inc.php';
if(isset($_GET['id']))
{
$id=$_GET["id"];
            $query="delete from plans where plan_id='$id'";
             $result=mysqli_query($conn,$query);
            if($result)
            {
                echo "<script>window.open('plans.php','_self')</script>";
            }
  #else{ echo"error".$sql."<br>".$conn->error;} 
}
if(isset($_GET['tid']))
{
$id=$_GET["tid"];
            $query="update trainer set status='inactive'  where trainer_id='$id'";
             $result=mysqli_query($conn,$query);
            if($result)
            {
                echo "<script>window.open('trainer.php','_self')</script>";
            }
  #else{ echo"error".$sql."<br>".$conn->error;} 
}
if(isset($_GET['uid']))
{
$id=$_GET["uid"];
    $stat=$_GET["status"];
            if($stat=='active'){
            $query="update users set status='inactive'  where member_id='$id'";
            }
             else{
                 $query="update users set status='active'  where member_id='$id'";
             }
             $result=mysqli_query($conn,$query);
            if($result)
            {
                echo "<script>window.open('user_details.php','_self')</script>";
            }
  else{ echo"error".$query."<br>".$conn->error;} 
}
?>