<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GETTING STARTED WITH BRACKETS</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="login.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
  

   
   
   <div>
     
          
         <fieldset > <legend align="center">
             <img src="profile.png"></legend>
              <h5 style="margin-top:50px;"><?php  echo @$_GET['log_out']?></h5>
             <form action="ad_login.php" method="post" enctype="multipart/form-data">
             
             <h1 align="middle" style="font-size: 20px;">Log in Here </h1>
         
             <p><strong>Username</strong></p> <input type="email" name="mail" placeholder="Enter username" required>
             <p><strong>  Password </strong></p> <input type="password" name="pass" placeholder="Enter password" required>
             <input type="submit" name="login" value="Log in" style="background-color: #fb2525;">
             
             </form>
        
           
       </fieldset>
      
        </div>
     
       
          
       </body>

</html>

<?php 
session_start();
 include("dashboard/db.php");
if(isset($_POST['login'])){
     
    $email = ($_POST['mail']);
      $password =($_POST['pass']);
    
    $admin_user ="select * from admin where admin_email='$email' AND admin_pass='$password'";
    
    $run_admin =mysqli_query($conn,$admin_user);
    
     $check_admin = mysqli_num_rows($run_admin);
     
      if($check_admin==0){
          
          echo"<script> alert('username or password incorrect')</script>";
      }
    else{
        
        $_SESSION['admin_email']=$email;
         echo"<script> alert('Hi  admin, You logged-in sccessfully')</script>";
        echo"<script> window.open('dashboard.php','_self')</script>";
        
    }
    
    
    







}



?>