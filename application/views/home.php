<!DOCTYPE html>
<html lang="en">

<head>
    <title>BOOKS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <style>
body{color: gainsboro;}
.login{padding-left: 10px;}
h3{color: black; padding: 10px;}
p{color: black;}
.container-fluid{background-image:url("https://w0.peakpx.com/wallpaper/339/896/HD-wallpaper-library-concepts-stack-of-books-education-background-books-background-with-books-books-on-the-table.jpg");  
  min-height : 100%;
  min-width : 100%;
  background-size:100% 100%;
  background-repeat:no-repeat;}
  .carousel-inner img {
    width: 100%;
    height: 400px;
    margin-top: 80px;    
  }
 

</style>
</head>
<body>
    
   <nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top" >
        <a class="nav-bar brand" href="#">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiuBVN_qmThop15qd4lF-bbpp2lc79bbmQRA&usqp=CAU"  alt="logo" style="width:60px;" >
    </a>
    <div class="login">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SignUp">SignUp</button>
</div>
<ul class="navbar-nav ml-auto">
<h1 class="justify-content-center">Books World</h1></ul>
<ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a class="nav-link" href="#">About Us</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="#">Contact Us</a>
  </li>
</ul></nav>
<div class="modal" id="myModal">
<div class="modal-dialog">
             <div class="modal-content">
           <div class="modal-header" style="color:black;">   
          <h1>Login</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
           <div class="modal-body" style="color:black;">
           <div class="container">
     
                <form action="<?=base_url()?>Book/login" method="POST">
                
                       <div class="row">
                       <div class="col-lg-12">
         
 <label>User Name</label>
 <input type="text" name="username" class="form-control" placeholder="enter user name"> 
 <label>Password</label>
 <input type="password" name="password" class="form-control" placeholder="enter password">
<div style="padding-top:30px;">
<button type="submit" name="login" class="form-control btn btn-primary" >Login</button></div>
</div>
</div>
                </form>
</div>
</div>
</div>
</div>
</div>
<div class="modal" id="SignUp">
<div class="modal-dialog">
             <div class="modal-content">
           <div class="modal-header" style="color:black;">   
          <h1>Create Account</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
           <div class="modal-body" style="color:black;">
           <div class="container">
     
                <form action="<?=base_url()?>Book/registeruser" method="POST" >
                
                       <div class="row">
                       <div class="col-lg-12">
         
 <label>User Name</label>
 <input type="text" name="username" class="form-control" placeholder="enter user name"> 
 <label>Email</label>
 <input type="text" name="email" class="form-control" placeholder="enter password">
 <label>Mobile</label>
 <input type="tel" name="mobile" class="form-control" placeholder="enter mobile number">
 <label>Password</label>
 <input type="text" name="password" class="form-control" placeholder="enter password">
<div style="padding-top:30px;">
<button type="submit" name="SignUp" class="form-control btn btn-primary" >SignUp</button></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="https://www2.bfi.org.uk/sites/bfi.org.uk/files/styles/full/public/image/easter-yeggs-1947-001-bugs-bunny-reading.jpg?itok=_S5cyjfL" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/11/13/11/fantasycomposite.jpg?width=982&height=726&auto=webp&quality=75" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.vox-cdn.com/thumbor/3-4MCW-x7QXOJmcLx8Tn_SH8ZN4=/0x0:2040x1360/1400x1400/filters:focal(857x586:1183x912):format(jpeg)/cdn.vox-cdn.com/uploads/chorus_image/image/56377825/jbareham_170826_1888_0002.1503768943.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container-fluid" style="margin-top:20px"> 
<div class="row">
<div class="col-lg-6">
<h3 class="text-center">Why books ?</h3>
<p>Books play a quintessential role in every student’s life by introducing them to a world of imagination, providing knowledge of the outside world, improving their reading, writing and speaking skills as well as boosting memory and intelligence.</p>
<p>The importance of books in our life cannot be undermined for they not only help in broadening our horizons but also act as doorways of connecting us with the world around us.</p>
<p> They function as survival kits, they influence us and leave an impact on us.</p>
<p> to know the benefits of books and the importance of reading? Curious about how books impact our lives? Read this blog to know all about the importance of books in a student’s life, essays on importance of reading books, quotes and more!</p>
</div>

<div class="col-lg-6">
<h3 >Know more about books</h3>
<p>When they say that books are our true best friends, it is absolutely true.
  <br>Not only are books our companions but they are also our safe haven.
<br> Books never expect anything in return from us. Whenever we are 
<br>tired or bored or stressed, picking up a book and reading helps us to<br> 
go in another world – a world free of worries and everyday tension.
<br> At the same time, books enrich us and provide us with unimaginable<br> knowledge. </p>
</div>
</div>
</div>



</body>