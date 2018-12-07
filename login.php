 <?php  
        
        include("dashboard/db.php");
    
?> 

<head>
<link rel="stylesheet" href="login.css">
</head>
   
   <div>
 
             
             <form action="login.php" method="post" enctype="multipart/form-data" align="middle" class="position">
             
             <h1 align="middle" style="font-size: 20px;"class="text-warning">Log In Or Register in Here </h1>
         
             <p><strong>Email</strong></p> <input type="email" name="username" placeholder="Enter mail" required>
             <p><strong>  Password </strong></p> <input type="password" name="password" placeholder="Enter password" required>
             <input type="submit" name="log_in" value="Log in" style="background-color: #fb2525;">
             <p align="middle" style="margin-top: -5px;"><Strong>OR</Strong></p>
             </form>
          <a href="register.php"><input type="submit" name="" value="Register" style="background: blue;" class="position"></a> 
           
       
     
</div>
          
       



<?php 
require_once("function.php");
if(isset($_POST['log_in'])){
    
    $cus_username = $_POST['username'];
    $cus_pass = $_POST['password'];
    
    $cust_info="select* from register where email='$cus_username' AND password='$cus_pass'";
    
    $run_cust=mysqli_query($conn,$cust_info);
        
    $check_cust =mysqli_num_rows($run_cust);
    if($check_cust==0){
        echo"<script>alert('password or usename incorrect')</script>";
       
        echo "<script> window.open('search.php,'_self') </script>";
        exit();
    }
    
        $ip= getIp();
        $sel_cart ="select * from cart where ip_add='$ip'";
       $run_cart=mysqli_query($conn,$sel_cart);
        $check_cart=mysqli_num_rows($run_cart);
        if($check_cust>0 AND $check_cart==0){
              $_SESSION['customer_email']=$cus_username;
echo "<script> alert('You Logged in Successfull') </script>" ;
echo "<script> window.open('checkout.php,'_self') </script>" ;

            
        }
    else{
          $_SESSION['customer_email']=$cus_username;
echo "<script> alert('Registration Successfull') </script>" ;
echo "<script> window.open('search.php','_self') </script>" ;

   
    }
}

?>