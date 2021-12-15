
<!DOCTYPE html>
<html lang="en">

<head>
    
<title>Task</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>

</style>

<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  
<div class="container-fluid">

<div style="padding-top:5px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
     ADD PRODUCT</button></div>

     <ul class="navbar-nav ml-auto">
     <li class="nav-item active">
     <a  class="btn btn-danger" href="<?=base_url()?>task/index">Logout</a></li></ul>

      </nav>
      <div class="modal" id="myModal">
      <div class="modal-dialog">
       <div class="modal-content">
     <div class="modal-header" style="color:black;">   
    <h1>ADD PRODUCT</h1>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
     <div class="modal-body" style="color:black;">
       <div class="container-fluid">

         
       
                    
         
<form action="<?=base_url()?>task/addtask" method="POST" enctype="multipart/form-data">

<div class="form-group">
                    
     
<strong>  
         <label>Name</label>

         <input type="text" name="Name" class="form-control" placeholder="enter book name"> 

          <label>Image</label> <input type="file" name="Image"  > <br>

          <button type="submit" name="Add">Add</button>
             
        </div>
              
      </form>
              
    </div>
            
  </div>
          
</div>
          
</div>
          
</div>
    <div >
            

<div class="row">

<?php

foreach($task as $row)
{?>

<div class="col-lg-4">
<?=$row->id?>
<?=$row->Name?>
<a href="<?=base_url()?>uploads/<?=$row->Image ?>"><img width="100" src="<?=base_url()?>./uploads/<?=$row->Image?>"></a>
</div>


<?PHP
}
?>
</div>



      </body>
      </html>
