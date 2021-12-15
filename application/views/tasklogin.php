
<html >

<head>
    <title>Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <style>
body{color: gainsboro;}
.container{width: 500px;
padding: 100px;
background-color:  blue;
margin-top: 50px;}
a{color: white;}
</style>
</head>
<body>
    
   
    
  


           <div class="container">
     
                <form action="<?=base_url()?>Task/login" method="POST">
                
                       <div class="row">
                       <div class="col-lg-12">
         
 <label>User Name</label>
 <input type="text" name="username" class="form-control" placeholder="enter user name"> 
 <label>Password</label>
 <input type="password" name="password" class="form-control" placeholder="enter password">
<div style="padding-top:30px;">
<button type="submit" name="login" class="form-control btn btn-primary" >Login</button></div>
<a href="<?=base_url()?>task/taskusers" > new user? SignUp</a>

</div>
</div>
</div>
 </form>
</body>