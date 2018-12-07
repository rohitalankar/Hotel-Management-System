<!doctype html>
<?php include("dashboard/db.php");?>
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
            <link rel="stylesheet" href="bootstrap.min.css">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 

?>

<!--text area editor-->
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
                    <h1><i class="fa fa-clipboard"></i> Add Dish Details <small class="breadcrumb-item active">Food Posts</small></h1><hr>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
                            <li class="breadcrumb-item active"> <i class="fa fa-clipboard"></i>Dish Post </li>
                    </ol>
          
                   <div class="col-mx-8">
                   <form   action="foodpost.php"  method="post" enctype="multipart/form-data">
      
      
      <table  class="table table-hover table-bordered"  border=2>
                   <tr  align="middle">
                       <td colspan="6" style="background-color:aqua;"><h2> Insert Dish Details</h2></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Dish title:</b> </td>
                       <td><input type="text" name="dish_title" size="30"></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Dish category:</b></td>
                       <td><input type="text" name="dish_category" size="30"></td>
                   </tr>
                    
                    
                    
                    
                    
                    <tr>
                        <td align="middle"><b>Dish Image:</b></td>
                       <td><input type="file" name="dish_image"></td>
                   </tr>
                   <tr>
                        <td align="middle"><b>dish Price:</b></td>
                       <td><input type="text" name="dish_price"></td>
                   </tr>
                    
                   <tr>
                       <td  align="middle" colspan="8"><input colspan="8" type="submit" name="food_post" value="submit Details"></td>
                   </tr>
                    
                    
            </table>
      
      
      
  </form>
                    </div>
                </div>
           </div>
           </div>
           </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

if (isset($_POST['food_post'])) {
$dish_title=$_POST['dish_title'];
    $dish_cat=$_POST['dish_category'];
    
     $dish_price=$_POST['dish_price'];
    
     $status ='on'; 
 
     $dish_image = $_FILES['dish_image']['name'];
       $dish_image_tmp = $_FILES['dish_image']['tmp_name'];
       
       move_uploaded_file($dish_image_tmp,"room_img/$dish_image");
 
    $insert_dish ="INSERT INTO dish_details (dish_title, dish_category, dish_price,dish_image) VALUES ('$dish_title','$dish_cat','$dish_price','$dish_image')";

 $insert_food = mysqli_query($conn, $insert_dish );
if($insert_food){
echo "<script> alert('inserted successfully') </script>" ;
echo "<script> window.open('foodpost.php','_self') </script>" ;

} 
}

?>