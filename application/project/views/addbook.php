<!Doctype html>
<html>
    <head>
        <title>add book</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
     
        </style>
    </head>

<form action="<?=base_url()?>addbook" method="POST">
    <div class="container">
    <div class= "row">
    <label>Book Name</label>
 <input type="text" name="bookname" class="form-control" placeholder="enter book name"> 
 <label>Book Author</label> <input type="text" name="bookauthor" class="form-control" placeholder="enter author name"> <br>
 <label>Book Price</label> <input type="text" name="bookprice" class="form-control" placeholder= "enter book price"> <br>

<button type="submit" name="Add">Add</button>
</div>
    </div>
</form>