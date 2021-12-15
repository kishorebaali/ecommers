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
      background-color: blue;
      max-width: 200px;
    }

    .container-fluid {
      padding-top: 10px;
      background-color: white;

    }

    /* .kishore{margin: 5px;} */

    ._3OO5Xc {
      position: relative;
      display: inline-block;
      width: 40%;
    }

    ._1 {
      font-size: 11px;
      font-style: italic;
      margin-top: -1px;
      color: white;
    }

    ._3OO5Xc {
      position: relative;
      display: inline-block;
      width: 40%;
    }

    .L0Z3Pu {

      justify-content: flex-end;
      border: 1px solid #fff;
      background-color: #fff;
      height: 36px;
      width: 44px;
      border-radius: 2px;
      cursor: pointer;
      padding: 4px 12px 0 8px;

    }

    ._34RNph {
      fill: #2874f0;
    }

    ._2oO9oE {

      display: flex;

      justify-content: space-between;

      flex: auto;
      flex-grow: 1;
      flex-shrink: 1;
      flex-basis: auto;
      border-radius: 2px;
      background-color: #fff;
    }

    ._3704LK {
      padding: 0 16px;
      border-radius: 2px 0 0 2px;
      border: 0;
      outline: 0 none;
      font-size: 14px;
      height: 36px;
      width: 100%;
    }

    .hxs {
      background-color: white;
      padding-top: 20px;

    }

    .col-lg-4 {
      border-bottom: 10px solid whitesmoke;

      border-right: 10px solid whitesmoke;
      display: block;
    }

    body {
      background-color: lightgrey;
    }

    .r {
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }

    body {
      padding-top: 80px;
    }

    ._11 {
      text-align: center;
    }

    ._12 {
      font-size: 25px;
    }

    .st {
      margin-left: auto;
      margin-right: auto;
      width: 30%;
    }

    .center {
      margin-left: 70px;

    }

    a {
      color: black;
    }

    /* * {  */
    /* border-style: solid; */
    /* border-color: red; */
    /* } */
  </style>

<body>
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">


    <div class="container">
      <!-- <h4> Welcome <?php echo $_SESSION['name'] ?> <h4> -->
      <div class="row">
        <div class="col-12">
          <a class="navbar-brand" href="#"><img width="80px" src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/flipkart-plus_8d85f4.png"></a>
        </div>
        <div class="col-12">
          <a class="_1" href="#">Explore <span>plus</span><img width="10px" src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/plus_aef861.png"></a>
        </div>
      </div>


      <div class="col-12 _2oO9oE">
        <div class="_3OO5Xc">
          <input type="text" class="_3704LK" placeholder="search for products,brands and more">
        </div>
        <button class="L0Z3Pu" type="submit"><svg width="20" height="20" viewBox="0 0 17 18" classxmlns="http://www.w3.org/2000/svg">
            <g fill="#2874F1" fill-rule="evenodd"></g>
            <path class="_34RNph" d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path>
            <path class="_34RNph" d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path>
          </svg></button>
      </div>

      <ul class="navbar-nav ml-auto">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Model"><i class='fas fa-shopping-cart'>cart</i></a>
        <a href="<?= base_url() ?>flipkart/logout" class="btn btn-danger">Logout</a>
      </ul>
  </nav>


  <div class="row">
    <div class="col-lg-2">
    </div>

    <div class="col-lg-10">
      <div class="container-fluid">
        <div class="row">
          <?php

          foreach ($products as $row) { ?>
            <div class="col-lg-3">
              <div class="hxs">
                <div class="container">


                  <div class="col-lg-12">
                    <div class="r">
                      <a href="<?= base_url() ?>uploads/<?= $row->Pimage ?>"><img width="80" src="<?= base_url() ?>./uploads/<?= $row->Pimage ?>"></a>
                    </div>
                  </div>
                  <div class="_11">
                    <div class="col-lg-12">
                      <strong>
                        <a href="#"> <?= $row->Pname ?> </a>
                      </strong>
                    </div>
                    <div class="col-lg-12">
                      <div class="_12">
                        <strong> $<?= $row->Pprice ?> </strong>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="center">
                      <div class="form-group">
                        <form action="<?= base_url() ?>flipkart/addtocart" id="form">
                          <label>Qty</label>
                          <input type="number" name="quantity" id='<?= $row->id ?>' value="1" min="1" max="5">
                          <input type="hidden" name="pid" value="<?= $row->id ?>">
                          <a href="<?= base_url() ?>flipkart/addtocart?pid=<?= $row->id ?>"><button class="btn btn-primary">Add to cart</button></a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?PHP
          }
          ?>

        </div>
      </div>
    </div>
    <div class="modal" id="Model">

      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header" style="color:black;">

            <h1>ADD Products</h1>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>

          <div class="modal-body" style="color:black;">

            <?php {
              $result = $this->db->where("uid", $this->session->id)->get("cart")->result();

              $total = [];
              echo '<table class="table">';
              echo '<tr><th> name </th> <th>price</th> <th>qnty</th> <th> total </th> <th>remove</th></tr>';
              foreach ($result as $p) {

                $r = $this->db->where("id", $p->pid)->get("products")->row();
                echo "<tr> 
       <td>" . $r->Pname . " </td> 
       <td>" . $r->Pprice . " </td>
       <td> <a href=" . base_url() . "flipkart/qdec/" .  $p->id . "> <button>-</button></a>
       $p->quantity 
       <a href=" . base_url() . "flipkart/qinc/" . $p->id . "> <button>+</button> </a> </td>
       <td>" . $r->Pprice * $p->quantity . "</td>
       <td><a href= " . base_url() . "flipkart/deletefromcart/" . $p->id . ">remove</a></td>
       </tr>";
                $total[] = $r->Pprice * $p->quantity;
              }
              echo '</table>';

              $grandtotal = array_sum($total);

              echo $grandtotal;
            }

            ?>

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> Place order </button>
          </div>
        </div>
      </div>
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body ">
              <input type="hidden" name="grandtotal" value="<?= $grandtotal ?>">
              <label>Address:</label><br>
              <textarea id="address" name="address" required> </textarea><br><br>
              <label> Payment Method: </label><br>
              <select name="pay_method" id="pay_method">
                <option value="COD">Cash on delivery</option>
              </select>
            </div><br><br>
            <div class="modal-footer">
              <button id="button" class="btn btn-primary btn-sm" onclick="pay()">Pay</button>
            </div>
          </div>
        </div>
        <script>
          function pay() {
            window.location.href = "<?= base_url() ?>Flipkart/placeorder?address=  &total= <?= $grandtotal ?>";
          }
        </script>
</body>

</html>