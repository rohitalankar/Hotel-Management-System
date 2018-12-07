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
                    <h1><i class="fa fa-tachometer"></i> Dashboard <small class="breadcrumb-item active">Statistics overview</small></h1><hr>
                    <ol class="breadcrumb">
  <li class="breadcrumb-item active"> <i class="fa fa-tachometer"></i> Dashboard</li>
</ol>
                <div class="row tag-boxes">
                    <div class="col-md-6 col-lg-3" >
                       <div class="panel panel-primary"  >
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3" style="padding-left: 20px;">
                                   <i class="fa fa-comments fa-3x"></i>
                               </div>
                               <div class="col-xs-9">
                                   <div class="text-right huge">11</div>
                                   <div class="text-right">New comments</div>
                               </div>
                               </div>
                           </div>
                           <a href="#">
                               <div class="panel-footer ">
                                   <span class="pull-left" >
                                       view all comments
                                   </span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i>
                                   </span>
                                   <div class="clear-fix"></div>
                               </div>
                           </a>
                       </div>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                       <div class="panel panel-red">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3" style="padding-left: 20px;">
                                   <i class="fa fa-file-text fa-3x"></i>
                               </div>
                               <div class="col-xs-9">
                                   <div class="text-right huge">
                                           <?php 
        
        $get_info ="select * from room_table";
     
         $run = mysqli_query($conn,$get_info);
                                       $count=0;
         
        while($row_info=mysqli_fetch_array($run))
        {
            

           $count=$count+1;
            
        }
         echo"$count";
        
                  ?>                                
                                   
                                   
                               

                                   </div>
                                   <div class="text-right">All posts</div>
                               </div>
                               </div>
                           </div>
                           <a href="#">
                               <div class="panel-footer">
                                   <span class="pull-left">
                                       view all posts
                                   </span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i>
                                   </span>
                                   <div class="clear-fix"></div>
                               </div>
                           </a>
                       </div>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                       <div class="panel panel-yellow">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3" style="padding-left: 20px;">
                                   <i class="fa fa-users fa-3x"></i>
                               </div>
                               <div class="col-xs-9">
                                   <div class="text-right huge">38</div>
                                   <div class="text-right">All Users </div>
                               </div>
                               </div>
                           </div>
                           <a href="#">
                               <div class="panel-footer">
                                   <span class="pull-left">
                                       view all Users
                                   </span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i>
                                   </span>
                                   <div class="clear-fix"></div>
                               </div>
                           </a>
                       </div>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                       <div class="panel panel-green">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3" style="padding-left: 20px;">
                                   <i class="fa fa-folder-open fa-3x"></i>
                               </div>
                               <div class="col-xs-9">
                                   <div class="text-right huge">8</div>
                                   <div class="text-right">categories </div>
                               </div>
                               </div>
                           </div>
                           <a href="#">
                               <div class="panel-footer">
                                   <span class="pull-left">
                                       view all categories
                                   </span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i>
                                   </span>
                                   <div class="clear-fix"></div>
                               </div>
                           </a>
                       </div>
                        
                    </div>
                </div><hr style="padding-bottom:  25px;">
                <h3 color="green">>All Dishes</h3>
                <table class="table table-hover table-bordered">
                    <thead style="background-color: aqua;">
                        <tr>
                            <th>Name</th>
                            <th>Adress</th>
                            <th>Contact</th>
                            <th>Dish</th>
                           
                           
                        </tr>
                        
                         </thead>
                    <tbody>
                        <tr>
                            <td>chicken chat</td>
                            <td>100</td>
                            <td>chana chat with masala</td>
                            <td>Monday</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Biryani</td>
                            <td>90</td>
                            <td>biryani  with masala</td>
                            <td>Monday</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>sherpha noodles</td>
                            <td>100</td>
                            <td> shrpha noodles with gravy</td>
                            <td>Monday</td>
                        </tr>
                    </tbody>
            </table>
         
              <table class='table table-hover table-bordered'>
                  <div>  <thead style='background-color: aqua;'>
                        <tr>
                            <th>Room Title</th>
                            <th>Room Price</th>
                            <th>Room Brand</th>
                            <th>Room No</th>
                            <th>Room Image</th>
                             <th>Edit</th>
                           <th>Delete</th>
                           
                        </tr>
                        
                         </thead>
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
                        

            
            echo"
                    <tbody>
                        <tr>
                            <td>$room_title</td>
                            <td>$room_price</td>
                            <td>$room_brand</td>
                            <td>$room_no</td>
                            <td align='middle'><img src='room_img/$room_image' style='width:40px; height:40px;'></td>
                          <td><a href='update_post.php?edit_room= $room_id'><i class='fa fa-pencil'></i></a></td>
                         <td><a oneclick='return confirm('Are You Sure ?')' href='delete.php?delete_room= $room_id '><i class='fa fa-times'></i></a></td>
                        </tr>
                        
                        </tbody>";
            
            
        }
        
        
                      ?></div></table>
                         <table class='table table-hover table-bordered'>
                  <div>  <thead style='background-color: aqua;'>
                        <tr>
                            <th>DishTitle</th>
                            <th>Dish Price</th>
                            
                            
                            <th>Dish Image</th>
                             <th>Edit</th>
                           <th>Delete</th>
                           
                        </tr>
                        
                         </thead>
               <?php 
        
        $dish_query ="select * from dish_details";
     
         $dish_run = mysqli_query($conn,$dish_query);
         
        while($dish_info=mysqli_fetch_array($dish_run))
        {
            $dish_id = $dish_info['dish_id'];
            $dish_title = $dish_info['dish_title'];
            $dish_cat = $dish_info['dish_category'];
            
            $dish_price = $dish_info['dish_price'];
            $dish_image = $dish_info['dish_image'];
             
                        

            
            echo"
                    <tbody>
                        <tr>
                            <td>$dish_title</td>
                            <td>$dish_price</td>
                            
                            
                            <td align='middle'><img src='room_img/$dish_image' style='width:40px; height:40px;'></td>
                          <td><a href='update_post.php?edit_room= $dish_id'><i class='fa fa-pencil'></i></a></td>
                         <td><a  href='deletedish.php?delete_dish= $dish_id '><i class='fa fa-times'></i></a></td>
                        </tr>
                        
                        </tbody>";
            
            
        }
        
        
                      ?></div></table>
        
                        <a href="#"class="btn btn-primary">View our Dishes</a>

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