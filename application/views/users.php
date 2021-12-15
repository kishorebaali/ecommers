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
        .row{margin-top:50px;
        margin-left:100px;

           }
            body{background-image:url("https://www.listofdownload.com/wp-content/uploads/2019/12/underwater-movie-poster-2020-hd-1920x1080.jpg");

         color:white;} 
          .table-hover tbody tr:hover td, .table-hover tbody tr:hover th{background-color:grey;} 
          thead{color:white;}
          tbody{color:white;}
</style>
</head>

<body>      
  
<nav class="navbar navbar-expand-sm bg-danger navbar-dark">


      <div style="padding-top:5px;">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
           ADD BOOK
  
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
     
                <form action="<?=base_url()?>addbook" method="POST">
                <div class="form-group">
                          
                <strong>  
                <label>Book Name</label>
 <input type="text" name="bookname" class="form-control" placeholder="enter book name"> 
 <label>Book Author</label> <input type="text" name="bookauthor" class="form-control" placeholder="enter author name"> <br>
 <label>Book Price</label> <input type="text" name="bookprice" class="form-control" placeholder= "enter book price"> <br>

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
    <th>Book Name</th>
    <th>Book Author</th>
    <th>Book Price</th>
    <th>action</th>
  </tr>
  <?php
 
  foreach($book as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->bookname."</td>";
  echo "<td>".$row->bookauthor."</td>";
  echo "<td>".$row->bookprice."</td>";

  echo "<td><button onclick='dlt(".$row->id.")'>Delete</button>
        <a href='getbyid/".$row->id."'>update</a></td>";
  echo "</tr>";
 
  }
   ?>
</table>

<script>
  function dlt(id){
    var c= confirm ("are you sure?");
    if(c == true) {
      window.location.href = "<?= base_url()?>deletebook?id=" +id;
    }
  }
  </script>
            </body>