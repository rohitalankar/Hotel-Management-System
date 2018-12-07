
<!doctype html>
 <?php 
        session_start();
    include("dashboard/db.php");

     include("function.php");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>KC,s Spice</title>
    <link rel="stylesheet" href="style.css" type="text/css">
       <link rel="icon" href="logo.png">
        
            <link rel="stylesheet" href="style.css">
           
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   

      

    </head>
    <body>
       
        
        
     <!-- navigation menu starts from here-->
         <nav class="navbar navbar-expand-lg bg-dark navabar-dark"> 
              <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold" >KC's Hotel</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collpasenavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span><i class="fal fa-bars fa-3x;" style="height:10px;"></i>
                      </button>
                  <div class="collapse navbar-collapse text-center" id="collpasenavbar" text-ce>
                     <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link text-white" >HOME</a></li>
                          <li class="nav-item"><a href="index.php#service" class="nav-link text-white">SERVICES</a></li>
                           <li class="nav-item"><a href="index.php#Dish" class="nav-link text-white">DISHES</a></li>
                            <li class="nav-item "><a href="search.php" class="nav-link text-white"> ROOMS</a></li>
                            
                            
                            
                          
                         
                         
                     </ul>
                     
                  </div>
                  <form class="form-inline my-2 my-lg-0" method="get" action="result.php" enctype="multipart/form-data">
      <input class="form-control mr-sm-2 btn-outline-warning"  type="search" name="user_input"placeholder="Search Rooms">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="result">Search</button>
    </form>
              </div>
        </nav>
        <nav aria-label="breadcrumb" >
  <ol class="breadcrumb text-center">
      <li class="breadcrumb-item ml-auto" style="padding-left:10px; color:orange;"><h5>Welcome Guest!</h5></li>&nbsp;
      <li class=" md-auto"  style="padding-left:5px;"><a href="cart.php">Go to Cart</a></li>
  </ol>
</nav>
    
        <div class="container-fluid">
        
         
            <div class="row" >
                <div class="col-md-3">
                  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action category">
    Room Categories
  </button>
                     <?php getcats(); ?>
                     

</div>
                </div>
            <form action="cart.php" method="post" enctype="multipart/form-data"class="col-md-9 row"style="transform:translateX(5%);">
                <div>
                <div class='card shopping-cart' style='margin-top:-40px;width:1000px;'>
            <div class='card-header bg-dark text-light'>
                <i class='fa fa-shopping-cart' aria-hidden='true'></i>
                Booking cart
                
                <div class='clearfix'></div>
            </div>
                <?php $total_price=0;
      
      $ip=getIp();
      
      $room_price= "select * from cart where ip_add='$ip'";
      $run_price =mysqli_query($conn,$room_price);
      while($r_price=mysqli_fetch_array($run_price)){
          $room_id=$r_price['room_id'];
          $rm_price="select * from room_table where id='$room_id'";
          $run_room_price=mysqli_query($conn,$rm_price);
          while($price=mysqli_fetch_array($run_room_price)){
              $r_price=array($price['room_price']);
               $r_id=$price['id'];
               $r_title=$price['title'];
               $r_image=$price['room_image'];
               $r_p=$price['room_price'];
              
              $count=array_sum($r_price);
              $total_price+=$count;
        
      ?>
                 <div class='row'>
                        <div class='col-12 col-sm-12 col-md-2 text-center'>
                                <img class='img-responsive' src="<?php echo "room_img/$r_image";?>" alt='prewiew' width='120' height='80'>
                        </div>
                        <div class='col-12 text-sm-center col-sm-12 text-md-left col-md-6'>
                            <h4 class='product-name'><strong><?php echo $r_title; ?></strong></h4>
                            
                        </div>
                        <div class='col-12 col-sm-12 text-sm-center col-md-4 text-md-right row'>
                            <div class='col-3 col-sm-3 col-md-6 text-md-right' style='padding-top: 5px'>
                                <h6><strong>$<span class='text-muted'><?php echo $r_p;?></span></strong></h6>
                            </div>
                            <div class='col-4 col-sm-4 col-md-4'>
                                <div class='quantity'>
                                    
                                    
                                    
                                   
                                </div>
                            </div>
                            <div class='col-2 col-sm-2 col-md-2 text-right'>
                               <input type="checkbox" name="check[]" value="<?php echo $r_id; ?>">
                            </div>
                                                                             
                        </div>
                    </div><hr>
                                                           <?php }}?>
                                                            
             <div class="pull-right">
                   
                </div>
            </div>
            <div class="card-footer " style="width:1000px;">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <button class='btn btn-outline-info btn-sm pull-right' name="continue">Continue Booking</button>
                        </div>
                        
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px;height:100px;">
                    <a href="checkout.php" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>$<?php echo $total_price ?></b>
                    </div>
                    <button class="btn btn-outline-secondary pull-right" name="update" style="float:right;">
                        Update Booking cart
                 </button>
                </div>
               
                
            </div>
             
            </div> 
             
              </form></div>      
               
        </div>
          
           
           
            
            
    
        
      
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    </body>
</html>
<?php 
    
    

    $ip=getIp();
                        

if(isset($_POST['update']))
{
    
    
    foreach($_POST['check'] as $remove_id){
        $delete_room="delete  from cart where room_id='$remove_id'AND ip_add='$ip'";
        $run_delete=mysqli_query($conn,$delete_room);
        if($run_delete){
            echo"<script>window.open('cart.php',_self)</script>";
        }
    }
    
    
}
                if(isset($_POST['continue']))
                {
                    echo"<script>window.open('search.php','_self')</script>";
                }
  
?>
