<?php include("dashboard/db.php");
include("function.php");

if(isset($_GET['delete_room'])){
    
    $get_id=$_GET['delete_room'];
    
    $delete_room ="DELETE FROM `room_table` WHERE id='$get_id'";
     
         $run = mysqli_query($conn,$delete_room);
         
        if($run){
            echo"<script>alert('room details  deleted successfully')</script>";
                echo"<script>window.open('dashboard.php','_self')</script>";
        }

          
            
        
    
}
if(isset($_GET['delete_dish'])){
    
    $get_id=$_GET['delete_dish'];
    
    $delete_dish ="DELETE FROM `dish_details` WHERE id='$get_id'";
     
         $run = mysqli_query($conn,$delete_dish);
         
        if($run){
            echo"<script>alert('room details  deleted successfully')</script>";
                echo"<script>window.open('dashboard.php','_self')</script>";
        }

          
            
        
    
}
  

?>
