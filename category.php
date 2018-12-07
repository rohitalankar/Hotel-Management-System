<?php require_once('dashboard/top.php');?>
    
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
                    <h1><i class="fa fa-folder-open"></i> Categories <small class="breadcrumb-item active">Different Categories</small></h1><hr>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
  <li class="breadcrumb-item active"> <i class="fa fa-folder-open"></i> Categories</li>
</ol>
          <h3>>Indian Dishes</h3>
         <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="masaladosa.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Masala Dosa</h5>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="khichdi.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dal Khichdi</h5>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="pavbhaji.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pav Bhaji</h5>
     
    </div>
  </div>
</div>
          <hr>       
  <h3>>Chinese Dishes</h3>
         <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="spring.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Spring Rolls</h5>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="mushroom-rice.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Shitake Fried Rice with Water Chestnuts</h5>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="chilli.chicken2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Szechwan Chilli Chicken</h5>
     
    </div>
  </div>
</div>
        <hr>
        
        
         
             <table class="table table-hover table-bordered table-striped">
                
                 <thead>
                     <tr>
                         <th>Sr #</th>
                         <th>Category Name</th>
                         
                         <th>Edit</th>
                         <th>Delete</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td> 1   </td>
                         
                         <td>Indian</td>
                         <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                         <td><a href="#"><i class="fa fa-times"></i></a></td>
                     </tr>
                     <tr>
                         <td> 1   </td>
                         
                         <td>Indian</td>
                         <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                         <td><a href="#"><i class="fa fa-times"></i></a></td>
                     </tr>
                     <tr>
                         <td> 1   </td>
                         
                         <td>Indian</td>
                         <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                         <td><a href="#"><i class="fa fa-times"></i></a></td>
                     </tr>
                     <tr>
                         <td> 1   </td>
                         
                         <td>Indian</td>
                         <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                         <td><a href="#"><i class="fa fa-times"></i></a></td>
                     </tr>
                 </tbody>
             </table>
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