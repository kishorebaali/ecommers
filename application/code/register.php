
<?php

?>


<!Doctype html>
<html>
    <head>
        <title>Login Page</title>
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

<form action="<?=base_url()?>registeruser" method="POST">
    <div class="container">
    <div class= "row">
    <label>User Name</label>
 <input type="text" name="username" class="form-control" placeholder="enter user name"> 
 <label>Email</label> <input type="email" name="email" class="form-control" placeholder="enter email"> <br>
 <label>Mobile</label> <input type="text" name="mobile" class="form-control" placeholder= "enter mobile number"> <br>
 <label>Password</label><input type="password" name="password" class="form-control" placeholder="enter password"> <br>
<button type="submit" name="register">Register</button>
</div>
    </div>
</form>