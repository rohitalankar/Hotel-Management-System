<!doctype html>
<?php include("dashboard/db.php");
include("function.php");

if(isset($_GET['edit_room'])){
    
    $get_id=$_GET['edit_room'];
    
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
            <link rel="stylesheet" href="bootstrap.min.css">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 



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
                            <li class="breadcrumb-item active"> <i class="fa fa-clipboard"></i>Update Post </li>
                    </ol>
          
                   <div class="col-mx-8">
                   <form   action=""  method="post" enctype="multipart/form-data">
      
      
      <table  class="table table-hover table-bordered"  border=2>
                   <tr  align="middle">
                       <td colspan="6" style="background-color:aqua;"><h2> Update/Edit Post here</h2></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Room title:</b> </td>
                       <td><input type="text" name="update" size="30" value="<?php echo $row_info['title']; ?> "></td>
                   </tr>
                   
                   <tr>
                        
                       <td  align="middle" colspan="8"><input colspan="8" type="submit" name="submit" value="Edit post"></td>
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
    </body></html>

<?php 
  $update_id=  $row_info['id']; 
if (isset($_POST['submit'])) {
    
$Product_title=$_POST['update'];
    
 
    $update_room ="UPDATE `room_table` SET title='$Product_title',WHERE id='$update_id'";
 $run_pro = mysqli_query($conn, $update_room );
if($run_pro){
echo "<script> alert('udated successfully') </script>" ;
echo "<script> window.open('dashboard.php','_self') </script>" ;

} 
}

    ?>