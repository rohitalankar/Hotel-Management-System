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
                    <h1><i class="fa fa-clipboard"></i> Add post <small class="breadcrumb-item active">Different Posts</small></h1><hr>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
                            <li class="breadcrumb-item active"> <i class="fa fa-clipboard"></i>Add Post </li>
                    </ol>
          
                   <div class="col-mx-8">
                   <form   action="post.php"  method="post" enctype="multipart/form-data">
      
      
      <table  class="table table-hover table-bordered"  border=2>
                   <tr  align="middle">
                       <td colspan="6" style="background-color:aqua;"><h2> Insert Post here</h2></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Room title:</b> </td>
                       <td><input type="text" name="room_title" size="30"></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Room category:</b></td>
                       <td><select name="room_cat">
                           <option>Select Category</option>
                           <?php 
                           $get_room = "select * from room";
    
    $run_room =mysqli_query($conn,$get_room);
    
    while($row_room = mysqli_fetch_array($run_room)){
        
        
        $room_title = $row_room['room_title'];
        
        echo "<option><h6>$room_title</h6></option>";
        
        
        
        
    }
                           
                           ?>
                       </select></td>
                   </tr>
                    
                    <tr>
                        <td align="middle"><b>Room Type:</b></td>
                       <td><select name="room_brand">
                           <?php 
                           $get_room = "select * from brand";
    
    $run_room =mysqli_query($conn,$get_room);
    
    while($row_room = mysqli_fetch_array($run_room)){
        
       
        $brand_title = $row_room['brand_title'];
        
        echo "<option><h6>$brand_title</h6></option>";
        
        
        
    }
                           
                           ?>
                       </select></td>
                   </tr>
                    
                    
                    
                    <tr>
                        <td align="middle"><b>Room Image:</b></td>
                       <td><input type="file" name="room_image"></td>
                   </tr>
                   <tr>
                        <td align="middle"><b>Room Price:</b></td>
                       <td><input type="text" name="room_price"></td>
                   </tr>
                    
                    <tr>
                        <td align="middle"><b>Room Description:</b></td>
                        <td><textarea  class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"  name="room_desc"  style="border-color:black;"></textarea></td>
                   </tr>
                   <tr>
                        <td align="middle"><b>Room no:</b></td>
                       <td><input type="text" name="room_no"></td>
                   </tr>
                   <tr>
                        
                       <td  align="middle" colspan="8"><input colspan="8" type="submit" name="insert_post" value="submit post"></td>
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

if (isset($_POST['insert_post'])) {
$Product_title=$_POST['room_title'];
    $Product_cat=$_POST['room_cat'];
    $Product_brand=$_POST['room_brand'];
     $Product_price=$_POST['room_price'];
    $Product_desc=$_POST['room_desc'];
     $Product_no=$_POST['room_no'];
     $status ='on'; 
 
     $Product_image = $_FILES['room_image']['name'];
       $Product_image_tmp = $_FILES['room_image']['tmp_name'];
       
       move_uploaded_file($Product_image_tmp,"room_img/$Product_image");
 
    $insert_room ="INSERT INTO `room_table`(title,room_cat,room_brand,room_image,room_price,room_desc,room_no) VALUES ('$Product_title','$Product_cat','$Product_brand','$Product_image','$Product_price','$Product_desc','$Product_no')";

 $insert_pro = mysqli_query($conn, $insert_room );
if($insert_pro){
echo "<script> alert('inserted successfully') </script>" ;
echo "<script> window.open('post.php','_self') </script>" ;

} 
}

?>