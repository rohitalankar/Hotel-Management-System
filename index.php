
<!doctype html>
 <?php include("dashboard/db.php");
?>
    <?php include("function.php");
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
         <nav class="navbar navbar-expand-lg bg-dark navabar-dark fixed-top"> 
              <div class="container">
                  <a href="" class="navbar-brand text-warning font-weight-bold" >KC's Hotel</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collpasenavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span><i class="fal fa-bars fa-3x;" style="height:10px;"></i>
                      </button>
                  <div class="collapse navbar-collapse text-center" id="collpasenavbar" text-ce>
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item"><a href="index.php" class="nav-link text-white" >HOME</a></li>
                          <li class="nav-item"><a href="#service" class="nav-link text-white">SERVICE</a></li>
                          <li class="nav-item"><a href="#Dish" class="nav-link text-white">DISHES</a></li>
                            <li class="nav-item"><a href="search.php" class="nav-link text-white">ROOM</a></li>
                            
                     
                         
                         
                     </ul>
                      
                  </div>
              </div>
        </nav>
        <div id="particles-js">
         <div  class="text">
          <h1>Welcome To KC's Hotel</h1>
            </div>
        <script type="text/javascript" src="particle/particles.js"></script>
        <script  type="text/javascript"src="particle/particles.min.js"></script>
        <script type="text/javascript" src="particle/app.js"></script>
        <!--set background image-->
             
               
             </div>
            
        <!-- services block-->
        <section class="container sevice text-center" id="service">
            <h1 style="color:#FE8800;">Our Services</h1>
            <h3 color="orange">----<i class="fas fa-star" style="color:orange;"></i>---- </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-10 d-block m-auto">
                   <div class="imgsetting  d-block m-auto"> <i class="fas fa-cookie-bite fa-5x" style="margin-top:20px;"></i></div>
                   <h2 style="margin-top:30px;">Food and Beverages</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-10 d-block m-auto">
                   <div class="imgsetting  d-block m-auto"> <i class="fas fa-dumbbell fa-5x"  style="margin-top:20px;"></i></div>
                   <h2 style="margin-top:30px;">Fitness Rooms</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-10 d-block m-auto">
                   <div class="imgsetting  d-block m-auto" style="margin-top:50px;"> <i class="fas fa-building fa-5x"style="margin-top:20px;"></i></div>
                   <h2 style="margin-top:30px;" >Buisness and Hotel Rooms</h2>
                </div>
            </div>
        </section>
        <!-- popular rooms block -->
        
        <section class="container-fluid popular text-center" style="margin-top:50px;">
            <h1 style="color:#FE8800;">Popular Rooms</h1>
            <h3 color="orange">----<i class="fas fa-star" style="color:orange;"></i>---- </h3>
            <div class="container">
            <div class="row ">
        
                       <?php 
        
        $get_info ="select * from room_table order by RAND() LIMIT 3";
     
         $run = mysqli_query($conn,$get_info);
         
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
                        
                echo"<div class='card cardsetting' style='width:300px;'>
    <img class='card-img-top' src='room_img/$room_image' alt='Card image' style='width:auto; height:200px;'>
    <div class='card-body' style='height:auto; width:auto;'>
      <h4  align='left' class='card-title'>$room_title</h4>
      <h5 align='left'>PRICE : $room_price $</h5>
      <h5 align='left'><a href='details.php?room_id=$room_id' class='btn btn-primary'>BOOK NOW</a></h5>
    </div>
  </div>";
                    
        
    }
                      ?> 
                </div>   
               
                </div>
    
        </section>
        <!-- dish block-->
            <section class="container-fluid popular text-center" style="margin-top:0px;"id="Dish">
            <h1 style="color:#FE8800;">Our Popular Dishes</h1>
            <h3 color="orange">----<i class="fas fa-star" style="color:orange;"></i>---- </h3>
            <div class="container">
            <div class="row ">
        
                       <?php 
        
        $get_info ="select * from dish_details order by RAND() LIMIT 3";
     
         $run = mysqli_query($conn,$get_info);
         
        while($row_info=mysqli_fetch_array($run))
        {
            $dish_id = $row_info['dish_id'];
            $dish_title = $row_info['dish_title'];
            $dish_cat = $row_info['dish_category'];
           
            $dish_price = $row_info['dish_price'];
            $dish_image = $row_info['dish_image'];
             
                        
                echo"<div class='card cardsetting' style='width:300px;'>
    <img class='card-img-top' src='room_img/$dish_image' alt='Card image' style='width:auto; height:200px;'>
    <div class='card-body' style='height:auto; width:auto;'>
      <h4  align='left' class='card-title'>$dish_title</h4>
      <h5 align='left'>PRICE : $dish_price </h5>
      
    </div>
  </div>";
                    
        
    }
                      ?> 
                </div>   
               
                </div>
    
        </section>
           
            
            
    
        
      
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    </body>
</html>