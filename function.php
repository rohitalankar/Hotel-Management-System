<?php



$conn = mysqli_connect("localhost","root","","kcproject");

//getting the room types
function getcats(){
                          
    global $conn;
    
    $get_room = "select * from brand";
    
    $run_room =mysqli_query($conn,$get_room);
    
    while($row_room = mysqli_fetch_array($run_room)){
        
        $brand_id=$row_room['brand_id'];
        $brand_title = $row_room['brand_title'];
        
        echo "
            <a href='search.php?cat_title=$brand_title' class='list-group-item list-group-item-action'>$brand_title</a>";
        
    }
        
    }
                           
                        

function getrooms()
{
    global $conn;
    
    if(!isset($_GET['cat_title'])){
        
    $get_info ="select * from room_table order by RAND() LIMIT 6";
     
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
                        
                echo"<div class='card cardsetting' style='width:250px;'>
    <img class='card-img-top' src='room_img/$room_image' alt='Card image' style='width:150; height:200px;'>
    <div class='card-body' style='height:auto; width:auto;'>
      <h4  align='left' class='card-title'>$room_title</h4>
      <h5 align='left'>PRICE : $room_price $</h5>
      <h5 align='left'><a href='details.php?room_id=$room_id' class='btn btn-primary'>DETAILS</a></h5>
      <h5 align='left'><a href='search.php?add_cart=$room_id' class='btn btn-warning'>Add To Cart</a></h5>
    </div>
  </div>";
        }
}
}
 function getfood(){
     global $conn;
     $get_info ="select * from dish_details order by RAND() LIMIT 3";
     
         $run = mysqli_query($conn,$get_info);
         
        while($row_info=mysqli_fetch_array($run))
        {
            $dish_id = $row_info['dish_id'];
            $dish_title = $row_info['dish_title'];
            $dish_cat = $row_info['dish_category'];
           
            $dish_price = $row_info['dish_price'];
            $dish_image = $row_info['dish_image'];
             
                        
                echo"<div class='card cardsetting' style='width:250px;'>
    <img class='card-img-top' src='room_img/$dish_image' alt='Card image' style='width:150; height:200px;'>
    <div class='card-body' style='height:auto; width:auto;'>
      <h4  align='left' class='card-title'>$dish_title</h4>
      <h5 align='left'>PRICE : $dish_price </h5>
      
    </div>
  </div>";
                    
        
    }
     
 }




function get_cat_rooms()
{
    global $conn;
    
    if(isset($_GET['cat_title'])){
        $cat_title= $_GET['cat_title'];
        
    $get_cat_info ="select * from room_table where room_brand='$cat_title' ";
     
         $run_cat = mysqli_query($conn,$get_cat_info);
        $count=mysqli_num_rows($run_cat);
         if($count==0){
             echo"<h1 align='middle' style='background-color:#D39E00;height:50px;width:100%;'> Sorry ,There is no rooms in this category</h1>";
         }
         
        while($row_cat_info=mysqli_fetch_array($run_cat))
        {
            $room_id = $row_cat_info['id'];
            $room_title = $row_cat_info['title'];
            $room_cat = $row_cat_info['room_cat'];
            $room_brand= $row_cat_info['room_brand'];
            $room_price = $row_cat_info['room_price'];
            $room_image = $row_cat_info['room_image'];
             $room_desc= $row_cat_info['room_desc'];
             $room_no = $row_cat_info['room_no'];
            $room_date = $row_cat_info['room_date'];
                        
                echo"<div class='card cardsetting' style='width:250px;height:400px;'>
    <img class='card-img-top' src='room_img/$room_image' alt='Card image' style='width:auto; height:200px;'>
    <div class='card-body' style='height:0px; width:200px;'>
      <h4  align='left' class='card-title'>$room_title</h4>
      <h5 align='left'>PRICE : $room_price $</h5>
      <h5 align='left'><a href='details.php?room_id=$room_id' class='btn btn-primary'>Details</a></h5>
       <h5 align='left'><a href='search.php?add_cart=$room_id' class='btn btn-primary'>BOOK NOW</a></h5>
    </div>
  </div>";
        }
}
}
//ip address code
   function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
  
 function cart(){
     global $conn;
     if(isset($_GET['add_cart'])){
          $ip= getIp();
         $room_id= $_GET['add_cart'];
          $check_room="select* from cart where ip_add='$ip' AND room_id='$room_id'";
         $run_room=mysqli_query($conn,$check_room);
         if(mysqli_num_rows($run_room)>0){
             echo"";
             
         }
         else{
             $insert_room= "insert into cart (room_id,ip_add) values('$room_id','$ip')";
             $run_pro =mysqli_query($conn,$insert_room);
             echo"<script>window.open('serach.php,'_self')</script>";
         }
     }
 }
    //getting the total  added rooms
function total_rooms(){
    global $conn;
    if(isset($_GET['add_cart'])){
        $ip=getIp();
        $get_rooms ="select * from cart where ip_add='$ip'";
        $run_items =mysqli_query($conn,$get_rooms);
        $count =mysqli_num_rows($run_items);
      
    }
    else{
         $ip=getIp();
        $get_rooms ="select * from cart where ip_add='$ip'";
        $run_items =mysqli_query($conn,$get_rooms);
        $count =mysqli_num_rows($run_items);
      
        
    }
    echo $count;
}
  function total_price(){
      global $conn;
      $total_price=0;
      
      $ip=getIp();
      
      $room_price= "select * from cart where ip_add='$ip'";
      $run_price =mysqli_query($conn,$room_price);
      while($r_price=mysqli_fetch_array($run_price)){
          $room_id=$r_price['room_id'];
          $rm_price="select * from room_table where id='$room_id'";
          $run_room_price=mysqli_query($conn,$rm_price);
          while($price=mysqli_fetch_array($run_room_price)){
              $r_price=array($price['room_price']);
               $r_id=$price['id'];
               $r_title=$price['title'];
               $r_image=$price['room_image'];
               
              
              $count=array_sum($r_price);
              $total_price+=$count;
              
          }
      }
      echo $total_price;
  }
 function countcat(){
     global $conn;
     $count=0;
     $cat="select * from brand";
     while($cat){
         $count=$count+1;
     }
     echo"$count";
 }

?>
