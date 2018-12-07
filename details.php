<!doctype html>
<?php include("dashboard/db.php");
include("function.php");

if(isset($_GET['room_id'])){
    
    $get_id=$_GET['room_id'];
    
    $get_info ="select * from room_table where id='$get_id'";
     
         $run = mysqli_query($conn,$get_info);
         
        $row_info = mysqli_fetch_array($run);
        
            $pro_id = $row_info['id'];
            $room_title = $row_info['title'];
            $room_cat = $row_info['room_cat'];
            $room_brand= $row_info['room_brand'];
            $room_price = $row_info['room_price'];
            $room_image = $row_info['room_image'];
             $room_desc= $row_info['room_desc'];
             $room_no = $row_info['room_no'];
            $room_date = $row_info['room_date'];
                        

          
            
        
    
}

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
       
        
            <link rel="stylesheet" href="style.css">
            
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 



<!--text area editor-->
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
                      <!-- horizonatl room card-->
                  </div>
                  <form class="form-inline my-2 my-lg-0" method="get" action="details.php" enctype="multipart/form-data">
      <input class="form-control mr-sm-2 btn-outline-warning" style="focus:none;" type="search" name="user_input" placeholder="Search Rooms" >
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
            
                <div class="col-md-9 row">
                <?php 
                    
                    
                    
    
        if(isset($_GET['result'])){
            $search_user=$_GET['user_input'];
    $get_info ="select * from room_table where title like '%$search_user%'";
     
         $run = mysqli_query($conn,$get_info);
            $count=mysqli_num_rows($run);
         if($count==0){
             echo"<h1 align='middle' style='background-color:#D39E00;height:50px;width:100%;'> Sorry ,No Result is found</h1>";
         }
         
        while($row_info=mysqli_fetch_array($run))
        {
            $room_id = $row_info['id'];
            $room_title = $row_info['title'];
            $room_cat = $row_info['room_cat'];
            $room_brand= $row_info['room_brand'];
            $room_price = $row_info['room_price'];
            $room_image = $row_info['room_image'];
             $room_desc= $row_info['room_desc'];
             $room_no = $row_info['room_no'];
            $room_date = $row_info['room_date'];
                        
                echo"<div class='card cardsetting' style='width:250px;'>
    <img class='card-img-top' src='room_img/$room_image' alt='Card image' style='width:150; height:200px;'>
    <div class='card-body' style='height:auto; width:auto;'>
      <h4  align='left' class='card-title'>$room_title</h4>
      <h5 align='left'>PRICE : $room_price $</h5>
      <h5 align='left'><a href='details.php?room_id=$room_id' class='btn btn-primary'>BOOK NOW</a></h5>
    </div>
  </div>";
        }
        }
                    else{
                        echo"<section class='container '>
     <div class='card md-8' style='margin-top:-50px;width:auto;' align='center'>
  <img class='card-img-top' src='room_img/$room_image' alt='Card image cap' style='width:100%;height:250px;'>
  <div class='card-body'>
    <h5 class='card-title'>$room_title</h5>
    <p class='card-text'><?php echo'$room_desc' ?></p>
    <p class='card-text'><small class='text-muted'></small></p>
    <h5 align='middle'><a href='' class='btn btn-warning'>BOOK THIS ROOM</a></h5>
  </div>
</div>
      </section>";
                
                        
                       
                    }
                    
    ?>
                
                
            </div>
                
                </div>
                
                </div>
        
           
          
        
      
                  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body></html>

