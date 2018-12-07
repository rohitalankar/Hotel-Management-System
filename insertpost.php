<!doctype html>

<?php include("dashboard/db.php");
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
           
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
   <?php include("dashboard/db.php");
?>
    <?php include("function.php");
?>

    </head>
    <body>
 

    <!-- displaying the rooms details-->
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
                        

            
            echo"<section>
  <div class='container'>
    <div class='card'>
      <div class='row '>
        <div class='col-md-4'>
            <img src='room_img/$room_image' style='width:400px; height:200px;'>
          </div>
          <div class='col-md-8 px-3'>
            <div class='card-block px-3' style='margin:30px;'>
              <h4 class='card-title'>$room_title</h4>
              <p class='card-text'>$room_desc</p>
              
             <a href='#' class='btn btn-primary'>BOOK NOW</a>
             
              <h6 align='right'> Last posted at:<br>$room_date<h6>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>";
            
            
        }
        
        
?>
     
   
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>



