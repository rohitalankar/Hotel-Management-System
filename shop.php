
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
                     <ul class="navbar-nav">
                         <li class="nav-item"><a href="" class="nav-link text-white" >HOME</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-white">REGISTER</a></li>
                           <li class="nav-item"><a href="" class="nav-link text-white">LOGIN</a></li>
                            <li class="nav-item "><a href="" class="nav-link text-white">ROOM</a></li>
                            <li class="nav-item "><a href="" class="nav-link text-white">CONTACT</a></li>
                            
                          
                         
                         
                     </ul>
                      <!-- horizonatl room card-->
                  </div>
                  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 btn-outline-warning" style="focus:none;" type="search" placeholder="Search Rooms">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
              </div>
        </nav>
        <section>
        
                      <?php 
        
        $get_info ="select * from room_table";
     
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
                        
                
                    
        
    
 echo"<div class='container py-3' style='margin-top:70px;'>
    <div class='card' style='width:1200px;'>
      <div class='row '>
        <div class='col-md-4'>
            <img src='room_img/$room_image' style='height:250px; width:250px;' class='w-100'>
          </div>
          <div class='col-md-8 px-3'>
            <div class='card-block px-3'>
              <h4 class='card-title'>$room_title</h4>
              <p class='card-text'>$room_desc </p>
              <p class='card-text'>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h1>Price :$room_price </h1>
              <a href='details.php?room_id='$room_id'' class='btn btn-primary' align='left'>Book Now</a>
            </div>
          </div>

        </div>
      </div>
    </div>";
  }
                      ?> 
</section>
        
           
            
            
    
        
      
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    </body>
</html>