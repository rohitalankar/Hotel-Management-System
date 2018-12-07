<html>
    <?php 
         session_start();
    
        include("dashboard/db.php");
         include("function.php");
        
         ?>
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
     
         <form action="register.php" method="post" enctype="multipart/form-data">
         <fieldset ><legend align="center">
             <img src="profile.png"></legend>
             <h1 align="middle" style="font-size: 20px;">Log in Here </h1>
         
             <p><strong>Customer Name:</strong></p> <input type="text" name="username" placeholder="Enter username">
              <p><strong>Customer Email:</strong></p> <input type="email" name="Email" placeholder="Enter email">
              
             <p><strong>  Customer Password: </strong></p> <input type="password" name="password" placeholder="Enter password">
             <p><strong>Costomers Photo :<span><input type="file" name="photo"></span></strong></p>
             <p><strong>  Customers City: </strong></p> <input type="text" name="city" placeholder="Enter City">
             <p><strong>  Customers Mob No.: </strong></p> <input type="text" name="mobno" placeholder="Enter Mob.no">
             <input type="submit" name="register" value="Register" style="background: blue;">
         
       </fieldset>
       </form>
        </div>
     
       
          
       </body>

</html>
<?php 

if (isset($_POST['register'])) {
    $ip = getIP();
    $cus_name =$_POST['username'];
     $cus_email =$_POST['Email'];
    $cus_pass =$_POST['password'];
    $cus_city =$_POST['city'];
     $cus_mob_no =$_POST['mobno'];
 
 
     $cus_image = $_FILES['photo']['name'];
       $cus_image_tmp = $_FILES['photo']['tmp_name'];
       
       move_uploaded_file( $cus_image_tmp,"cus_img/$cus_image");
     $get="select Name from register where Name='$cus_name'";
     $query=mysqli_query($conn,$get);
     if($query){
         echo"<script>alert('sry')</script>";
     }
 else{
    $insert_room ="INSERT INTO `register`(Name,email,password,cus_img,cus_city,cus_mob,cus_ip) VALUES ('$cus_name','$cus_email','$cus_pass','$cus_image','$cus_city','$cus_mob_no',' $ip')";
     $cus_query=mysqli_query($conn,$insert_room);
     if($cus_query){
echo "<script> alert('Registration Successfull') </script>" ;
echo "<script> window.open('profile.php','_self') </script>" ;
 
    }
} 


    }


?>