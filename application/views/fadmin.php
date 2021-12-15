<!DOCTYPE html>
<html lang="en">

<head>

  <title>Products</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <style>
    .panel {
      background-color: whitesmoke;
      display: block;
      width: 200px;
    }

    body {
      background-color: lightgrey;
    }

    .nav-item {
      border-bottom: 1px solid grey;
      border-right: 1px solid grey;
      padding-left: 20px;
    }
  </style>


<body>

  <nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <div class="row">

      <div class="col-lg-10">
        <div style="padding-top:5px;">
          <h4> welcome <?php echo $_SESSION['name'] ?></h4>
        </div>
      </div>

      <div class="col-lg-2">
        <a href="<?= base_url() ?>flipkart/logout" class="btn btn-danger">Logout</a>
      </div>

  </nav>

  <div class="modal" id="myModal">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header" style="color:black;">

          <h1>ADD Products</h1>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body" style="color:black;">

          <div class="container-fluid">


            <form action="<?= base_url() ?>flipkart/addproduct" method="POST" enctype="multipart/form-data">

              <div class="form-group">


                <strong>


                  <label>Product Name</label>

                  <input type="text" name="Pname" class="form-control" placeholder="enter Product name">

                  <label>Product Price</label> <input type="text" name="Pprice" class="form-control" placeholder="enter product price"> <br>

                  <label for="comment">Product Description</label> <textarea class="form-control" name="Pdesc" rows="5" id="comment" name="text"></textarea> <br>

                  <label>Product Image</label> <input type="file" name="Pimage"> <br>

                  <button type="submit" name="Add">Add</button>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-lg-1.5">
      <div class="panel">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#myModal" data-toggle="modal"> Add Product </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>flipkart/users">Users</a>
          </li>
        </ul>
      </div>


    </div>

    <div class="col-lg-10">
      <img style="opacity: 1;" height="50%" width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFmIW8YXW4-AeznkZYSsms3imlQLvoBgCthg&usqp=CAU">
    </div>
</body>

</html>