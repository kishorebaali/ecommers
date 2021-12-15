<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <style>

</style>
<div style="padding-top:5px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
     ADD USER</button>

      </nav>
      <div class="modal" id="myModal">
      <div class="modal-dialog">
       <div class="modal-content">
     <div class="modal-header" style="color:black;">   
    <h1>ADD USER</h1>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
     <div class="modal-body" style="color:black;">
       <div class="container-fluid">

          <form action="<?=base_url()?>book/adduser" method="POST" enctype="multipart/form-data">
          <div class="form-group">
                    
          <strong>  
          <label>User Name</label>
<input type="text" name="username" class="form-control" placeholder="enter user name"> 
<label>Email</label> <input type="email" name="email" class="form-control" placeholder="enter email"> <br>
<label >Mobile</label>  <input class="form-control" type="tel" name="mobile" placeholder="enter mobile number" ></textarea> <br>
<label>Password</label> <input type="password" name="password"  > <br>

<button type="submit" name="Add">Add</button>
             </div>
              </form>
              </div>
            </div>
          </div>
          </div>
          </div>
          <html>
<body>

<table class="table table-hover">
<tr >

          <th>id</th>
<th>User Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Password</th>
<th>action</th>
</tr>
<?php

foreach($users as $row)
{?>
<tr>
<td><?=$row->id?></td>
<td><?=$row->username?></td>
<td><?=$row->email?></td>
<td><?=$row->mobile?></td>
<td><?=$row->password?></td>
<!-- <td><a href="<?=base_url()?>uploads/<?=$row->BookImage ?>"><img width="40" src="<?=base_url()?>./uploads/<?=$row->BookImage?>"></a></td> -->

<td><button onclick='dlt("<?=$row->id?>")'>Delete</button>
  <a href='<?=base_url()?>book/getbyid/<?=$row->id?>'>update</a></td>
</tr>

<?PHP
}
?>
</table>

<script>
function dlt(id){
var c= confirm ("are you sure?");
if(c == true) {
window.location.href = "<?= base_url()?>book/deleteuser?id=" +id;
}
}
</script>
      </body>
</body>