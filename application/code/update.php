
<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>



<form action="<?php echo base_url()?>update" method="POST">
                   

                   <div class="container">   
                     <div class="row" >
                       <div class="col-md-3">
                         <div style="padding-top: 5px;">
                          <label > Id</label>
                         </div>
                                 <input type="text" name="id" class="form-control" value="<?=$row->id?>" readonly>
                                 
                                 <div style="padding-top: 10px;">
                                 <label> User Name</label>
                               </div>
                                 <input type="text" name="username" class="form-control" value="<?=$row->username?>">
                                 
                                 <div style="padding-top: 10px;">
                                 <label> email</label>
                               </div>
                                 <input type="text" name="email" class="form-control" value="<?=$row->email?>">
                                 
                                 <div style="padding-top: 10px;">
                                 <label> mobile</label>
                               </div>
                                 <input type="text" name="mobile" class="form-control" value="<?=$row->mobile?>">
                                 <div style="padding-top: 10px;">
                                 <label>password</label>
                               </div>
                                 <input type="text" name="password" class="form-control" value="<?=$row->password?>">
                                
                                
                       <button type="submit" name="updatemovie" class="btn btn-success btn-md" value="update">Update</button>      
                       </div>
                            
              
                 </div>
                   </div>
                    </div>
                     </form>
                  
                    </body>
</html>