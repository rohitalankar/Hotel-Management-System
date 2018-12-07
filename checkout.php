
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
                  <form class="form-inline my-2 my-lg-0" method="get" action="all_rooms.php" enctype="multipart/form-data">
      <input class="form-control mr-sm-2 btn-outline-warning"  type="search" name="user_input"placeholder="Search Rooms">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="search">Search</button>
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
                if(!isset($_SESSION['customer_email'])){
                    include("login.php");
                    
                }
                    else
                    {
                        include("payment.php");
                    }
                    ?>
               
                
            </div>
                
                </div>
                
                </div>
        
           
            
            
    
        
      
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    </body>
</html>