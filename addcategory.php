<?php require_once('dashboard/top.php');?>
    <?php include("dashboard/db.php");
?>
    <?php include("function.php");
?>
  </head>
  <body>
   <?php require_once('dashboard/nav.php');?> 
      
       <div style="padding-top: 100px;">
       
        <div class="container-fluid">
           <div id="drib" class="col"></div>
            <div class="row">
                <div class="col-md-3">
                  <?php require_once('dashboard/col.php');?>
                    
                </div>
               <div class="col-md-9">
                   
                 <h3>Room Category Name:</h3>
                 <form action="addcategory.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="room_title" size="30">
                    <input type="submit" name="submit" size="30">
                </form>
               </div>
            </div>
            
           </div></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
 $room_name=$_POST['room_title'];
    $status ='on'; 
 $room_cat="INSERT INTO brand( brand_title) VALUES ('$room_name')";
$cat_run=mysqli_query($conn,$room_cat);
if($cat_run){
    echo"<script>alert('inserted successfully')</script>";
}
    mysqli_commit($conn);
}
?>




