<?php
    include 'includes/dbh.inc.php';
#if(isset($_POST['login_submit'])){
	#$username=$_POST['username'];
	#$password=$_POST['password'];
	#$query="select * from logintb where username='$username' and password='$password'";
	#$result=mysqli_query($conn,$query);
	#if(mysqli_num_rows($result)==1)
	#{
		#header("Location:admin-panel.php");
	
#}
	#else
    #{
       # echo "<script>alert('error login')</script>";
        #echo "<script>window.open('admin.php','_self')</script>";
    #}
    #}
if(isset($_POST['plan_submit']))
        {
            $file_name=$_FILES['img']['name'];
            $file_type=$_FILES['img']['type'];
            $file_size=$_FILES['img']['size'];
            $file_temp=$_FILES['img']['tmp_name'];
            $file_store="uploads/".$file_name;
            move_uploaded_file($file_temp,$file_store);
            
            $amount=$_POST['amount'];
            $plan=$_POST['plan'];
            $month=$_POST['month'];
              $discount=$_POST['discount'];
              #if($discount==''){$discount='NULL';}
            $query="insert into plans(`plan_name`, `amount`,`months`,`discount`,`picture`)values('$plan','$amount','$month','$discount','$file_name')";
             $result=mysqli_query($conn,$query);
            if($result)
            {
              echo "<script>alert('ADD sucessfull.')</script>";
                echo "<script>window.open('plans.php','_self')</script>";
            }
    #else{ echo"error".$sql."<br>".$conn->error;}
            } 


if(isset($_POST['user_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $trainer=$_POST['trainer_id'];
    $add=$_POST['address'];
    $query="insert into users(fname,lname,email,contact,trainer_id,address)values('$fname','$lname','$email','$contact','$trainer','$add')";
     $result=mysqli_query($conn,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    } 
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($conn,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
        if(isset($_POST['pay_submit']))
        {
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['member_id'];
            $plan_type=$_POST['plan_type'];
            $query="insert into Payment(Amount,member_id,plan_type)values('$Amount','$customer_id','$plan_type')";
             $result=mysqli_query($conn,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            } 
if(isset($_POST['rev_sub']))
        {
            $mail=$_POST['email'];
            $name=$_POST['name'];
            $rev=$_POST['rev'];
            $q="Select * from users where email='$mail'";
            $r=mysqli_query($conn,$q);
            if(mysqli_num_rows($r)>0)
            {
            $query="insert into reviews(email,name,review)values('$mail','$name','$rev')";
             $result=mysqli_query($conn,$query);
              if($result)
              {
                echo "<script>alert('review given.')</script>";
                   echo "<script>window.open('index.php','_self')</script>";
                }
            }
            else{ echo "<script>alert('HAHAHA you are not a member of our gym.')</script>";
                   echo "<script>window.open('index.php','_self')</script>";
                }
            } 


 function get_user_details(){
    global $conn;
    $query="select u.member_id,u.address,u.contact,u.email,u.fname,u.lname,u.trainer_id,u.status, t.trainer_id,t.name,t.phone from users u,trainer t where u.trainer_id=t.trainer_id order by u.status,member_id";
    $result=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($result)){
        $mem=$row['member_id'];
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $tname=$row['name'];
        $add=$row['address'];
        $status=$row['status'];
      echo "<tr>
      <td>$mem</td>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$add</td>
          <td>$tname</td>"; if($status=='active'){echo"
          <td><a href='del.php?uid=$mem&status=$status' role='button' class='btn btn-danger'><i class='fa fa-flag' style='color:black;'></i> inactivate</a></td>
        </tr>";}
        else{echo"
          <td><a href='del.php?uid=$mem&status=$status' role='button' class='btn btn-danger'><i class='fa fa-flag'></i> activate</a></td>
        </tr>"; }
    }
}
function get_plans(){
    global $conn;
    $query="select * from Plans";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $Plan_id=$row ['plan_id'];
        $Plan_name=$row['plan_name'];
        $mon=$row['months'];
        $m='';
        if($mon==1){$m=' Month';}else{ $m=' Months';}
        $Amount=$row['amount'].'/ '.$mon.' '.$m;
        $discount=$row['discount'];
        echo"<tr>
        <td>$Plan_id</td>
        <td>$Plan_name</td>
            <td>$Amount</td>
            <td>$discount</td>
            <td><a href='del.php?id=$Plan_id' role='button' name='plan_del' class='btn btn-danger'><i class='fa fa-trash'></i> Delete</a></td>
            
        </tr>";

    }
}
function get_trainer(){
    global $conn;
    $query="select * from Trainer where status='active'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $t_id=$row ['trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$t_id</td>
        <td>$Name</td>
            <td>$phone</td>
            <td><a href='del.php?tid=$t_id' role='button' class='btn btn-danger'><i class='fa fa-trash'></i> Delete</a></td>
            
        </tr>";

    }
}
function get_payment(){
    global $conn;
    $query="select * from Payment p,users u where p.member_id=u.member_id";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['payment_id'];
        $Amount=$row['amount'];
        $plan_type=$row['plan_type'];
        $customer_name=$row['fname'].' '.$row['lname'];
        $date=$row['date'];
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$plan_type</td>
        <td>$customer_name</td>
        <td>$date</td>
            </tr>";

    }
}
function get_reviews(){
    global $conn;
    $query="SELECT * FROM `reviews` order by date DESC LIMIT 4";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $rev=$row ['review'];
        $Name=$row['name'];
        echo"<div class='card bg-white'>
  <blockquote class='blockquote'>
    <p>$rev</p>
    <footer class='blockquote-footer'>$Name</footer>
  </blockquote>
</div>";
    
    }
}
function get_pln(){
    global $conn;
    $query="select * from Plans";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $Plan_id=$row ['plan_id'];
        $Plan_name=$row['plan_name'];
        $mon=$row['months'];
        $m='';
        if($mon==1){$m=' Month';}else{ $m=' Months';}
        $Amount='.'.$row['amount'].'/ '.$mon.' '.$m;
        $discount=$row['discount'];
        $pic=$row['picture'];
        echo"<div class='card bg-white'>
      <div class='card-body text-center'>
      <img class='card-img-top' src='uploads/$pic' alt='Card image' style='width:40%; height:40%'>
        <h3 class='card-text bg-primary'>$Plan_name <br>Rs$Amount</h3>
        <b>discount:$discount</b>
        </div>
    </div>";
    
    }
}
       

?>
