
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
<form action="<?php echo base_url()?>book/update" method="POST">
 <div class="container">   
                     <div class="row" >
                       <div class="col-md-3">
                         <div style="padding-top: 5px;">
                          <label > Id</label>
                         </div>
                                 <input type="text" name="id" class="form-control" value="<?=$row->id?>" readonly>
                                 <div style="padding-top: 10px;">
                                 <label> Book Name</label>
                                 </div>
                                 <input type="text" name="BookName" class="form-control" value= "<?=$row->BookName?>" >
                                  <div style="padding-top: 10px;">
                                 <label> Book Price</label>
                                 </div>
                                 <input type="text" name="BookPrice" class="form-control" value="<?=$row->BookPrice?>">
                                 <div style="padding-top: 10px;">
                                 <label> Book Desc</label>
                                 </div>
                                 <input type="text" name="BookDesc" class="form-control" value="<?=$row->BookDesc?>">
                                 <div style="padding-top: 10px;">
                                 <label>Image</label>
                                 </div>
                                 <input type="file" name="BookImage" class="form-control" value="<?=$row->BookImage?>">
                                <button type="submit" name="updatebook" class="btn btn-success btn-md" value="update">Update</button>      
                       </div>
                      </div>
                   </div>
                    </div>
                     </form>
                    </body>
</html>