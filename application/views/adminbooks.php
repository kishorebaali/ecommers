<!DOCTYPE html>
<html lang="en">

<head>
    
<title>Books</title>

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

<div style="padding-top:5px;">
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> ADD BOOK </button></div>
     
<ul class="navbar-nav ml-auto">    

<i class='fas fa-shopping-cart'></i>

</ul>

</nav>
      
<div class="modal" id="myModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header" style="color:black;">   

<h1>ADD Book</h1>

<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>
      
<div class="modal-body" style="color:black;">
      
<div class="container-fluid">

      
<form action="<?=base_url()?>book/addbook" method="POST" enctype="multipart/form-data">

<div class="form-group">
                    
     
<strong>  
         <label>Book Name</label>

         <input type="text" name="BookName" class="form-control" placeholder="enter book name"> 

          <label>Book Price</label> <input type="text" name="BookPrice" class="form-control" placeholder="enter book price"> <br>

          <label for="comment">Book Description</label>  <textarea class="form-control" name="BookDesc" rows="5" id="comment" name="text"></textarea> <br>

          <label>Book Image</label> <input type="file" name="BookImage"  > <br>

          <button type="submit" name="Add">Add</button>
             
        </div>
              
      </form>
              
    </div>
            
  </div>
          
</div>
          
</div>
          
</div>
          

<table class="table table-hover">
<tr >

          <th>id</th>
<th>Book Name</th>
<th>Book Price</th>
<th>Book Desc</th>
<th>Book Image</th>
<th>action</th>
</tr>
<?php

foreach($book as $row)
{?>
<tr>
<td><?=$row->id?></td>
<td><?=$row->BookName?></td>
<td><?=$row->BookPrice?></td>
<td><?=$row->BookDesc?></td>
<td><a href="<?=base_url()?>uploads/<?=$row->BookImage ?>"><img width="40" src="<?=base_url()?>./uploads/<?=$row->BookImage?>"></a></td>

<td><button class="btn btn-primary" onclick='dlt("<?=$row->id?>")'>Delete</button>
  <a class= "btn btn-primary" href='<?=base_url()?>book/getbyid/<?=$row->id?>'>update</a>
 <a class= "btn btn-primary" href='<?=base_url()?>book/addtocart/<?=$row->id?>'>add to cart</a></td>
</tr>

<?PHP
}
?>
</table>

<script>
function dlt(id){
var c= confirm ("are you sure?");
if(c == true) {
window.location.href = "<?= base_url()?>book/deletebook?id=" +id;
}
}
</script>
      </body>
      </html>
