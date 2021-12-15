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
      .lock{background-color: grey;
      padding: 5px;}
      .envelope{background-color: grey;
      padding: 5px;}
      .container{width:500px;}
        </style>
    </head>
<body>
    <div class="container">
<form action="<?php echo base_url()?>login" method="POST">
    <div class="row">
      <div class="col-lg-10">
<label>username</label>
<div class="input-group">
                <div class="envelope"><i class="fas fa-envelope"></i></div>
        <input type="text" class="form-control" name="username" placeholder="enter email" />
              </div>
<label> password</label>
              <div class="input-group">
              <div class="lock">  <span><i class="fas fa-lock"></i></span></div>
                <input type="password" class="form-control" name="password" placeholder="enter Password"/>
               </div>

<button class="btn btn-primary" name=login value="login">login</button>
</form>


<p>new user <a href="<?php echo base_url()?>register" >sign up</a></p>
      </div>
</div>
</body>
</html>