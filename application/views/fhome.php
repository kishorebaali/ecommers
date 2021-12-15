<html>

<head>
  <title>Flipkart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<style>
  ._1 {
    font-size: 11px;
    font-style: italic;
    margin-top: -1px;
    color: white;
  }

  ._34RNph {
    fill: #2874f0;
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

  ._3704LK {
    padding: 0 16px;
    border-radius: 2px 0 0 2px;
    border: 0;
    outline: 0 none;
    font-size: 14px;
    height: 36px;
    width: 100%;
  }

  ._3OO5Xc {
    position: relative;
    display: inline-block;
    width: 40%;
  }

  .log {
    min-width: 112px;
    display: flex;
    align-items: center;
    cursor: pointer;
    height: 100%;
    line-height: 20px;
    font-size: 16px;
    letter-spacing: .1px;
    font-weight: 500;
    color: #fff;
    user-select: none;
    cursor: pointer;
    display: inline-block;
    position: relative;
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

  ._32 {
    color: white;
  }

  i {
    color: white;
  }

  .carousel-inner img {
    width: 100%;
    height: 300px;
    margin-top: 10px;
    border: 2px solid #dbdbdb;
  }

  ._123 {
    background-color: white;
    margin-top: 60px;
    border: 2px solid #dbdbdb;
    padding-left: 150px;
  }

  body {
    padding-top: 10px;
  }

  body {
    background-color: whitesmoke;
  }

  ._101 {
    font-weight: 500;
    font-size: 14px;
    margin-left: 35px;
  }

  ._202 {
    background-color: #152631;
    padding-top: 30px;
    border-bottom: 1px solid white;
  }

  h6 {
    color: grey
  }

  .kishore {
    color: white;
    font-size: 12px;
  }


  ._121 {
    border-right: 2px solid white;
  }

  .p {
    background-color: #2874f0;
  }

  a:hover {
    text-decoration: none;
    color: #2874f0;
  }

  a {
    color: black;
  }

  /* * {   */
  /* border-style: solid;  */
  /* border-color: red;  */
  /* } */
</style>

<body>

  <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
    <div class="container">
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

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Login
      </button>



      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <div class="_32">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              More
            </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Notification Preferences</a>
              <a class="dropdown-item" href="#">Sell on Flipkart</a>
              <a class="dropdown-item" href="#">24/7 Customer Service</a>
            </div>
          </div>
        </li>


      </ul>



      <ul class="navbar-nav ml-auto">

        <a href="#"><i class='fas fa-shopping-cart'>cart</i></a>

      </ul>
      <ul class="navbar-nav ml-auto">

        <a href="<?= base_url() ?>flipkart/register" class="btn btn-primary">Register</a>

      </ul>

    </div>

  </nav>
  <div class="login">
    <div class="container">
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">


            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <div class="row">
                <div class="p">
                  <div class="col-lg-6">
                    <h4 class="modal-title">Login</h4>
                    <p>Get access to your Orders
                    <p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <form action="<?= base_url() ?>flipkart/login" method="POST">
                    <label>name</label>
                    <input type="text" name="name" placeholder="enter name" class="form-control">
                    <label>password</label>
                    <input type="password" name="password" placeholder="enter password" class="form-control">
                    <button type="submit" class="btn btn-primary" name="login" class="form-control">Login</button>
                  </form>
                  new user?<a href="<?= base_url() ?>flipkart/register">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12">

    <div class="_123">

      <div class="row">
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/f15c02bfeb02d15d.png?q=100">

            </div>
            <label class="_101"><a href="#">TopOffers</a> </label>
          </div>
        </div>

        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100">
            </div>
            <label class="_101"><a href="#">Grocery</a></label>
          </div>
        </div>
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?q=100">
            </div>

            <label class="_101"><a href="#">Mobiles</a> </label>
          </div>
        </div>
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/82b3ca5fb2301045.png?q=100">
            </div>

            <label class="_101"><a href="#">Fashion</a> </label>
          </div>
        </div>

        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?q=100">
            </div>

            <label class="_101"><a href="#">Electronics</a> </label>
          </div>
        </div>
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/ab7e2b022a4587dd.jpg?q=100">
            </div>

            <label class="_101"><a href="#">Home</a> </label>
          </div>
        </div>
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/0ff199d1bd27eb98.png?q=100">
            </div>

            <label class="_101"><a href="#">Appliances</a> </label>
          </div>
        </div>
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/71050627a56b4693.png?q=100">
            </div>
            <label class="_101"><a href="#">Travel</a> </label>
          </div>
        </div>
        <div class="_333">
          <div class="col-6 col-lg-1">
            <div class="_102">
              <img src="https://rukminim1.flixcart.com/flap/128/128/image/dff3f7adcf3a90c6.png?q=100">
            </div>
            <label class="_101"><a href="#">Beauty,Toys & more</a> </label>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div id="dem" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#dem" data-slide-to="0" class="active"></li>
      <li data-target="#dem" data-slide-to="1"></li>
      <li data-target="#dem" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://1.bp.blogspot.com/-CAIDvcnjpMM/W9avsDYfFFI/AAAAAAAAC0M/9OuTRMHxilA3XAskWxwsZmFo6Q2qoam9gCLcBGAs/s1600/flipkart%2Bbig%2Bdiwali%2Bsale%2B2018.jpg" alt="Diwali sale">
      </div>
      <div class="carousel-item">
        <img src="https://hotdealszone.com/wp-content/uploads/2020/10/Flipkart-Big-Diwali-Sale-Offers-on-Mobiles-1024x474.jpg" alt="Diwali sale">
      </div>
      <div class="carousel-item">
        <img src="https://images.freekaamaal.com/post_images/1603707832.png" alt="Diwali sale">
      </div>
    </div>

    <a class="carousel-control-prev" href="#dem" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#dem" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="row">
    <div class="col-lg-4">
      <div class="ddd">
        <img height="80%" width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFmIW8YXW4-AeznkZYSsms3imlQLvoBgCthg&usqp=CAU">
      </div>
    </div>
    <div class="col-lg-4">
      <img height="80%" width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFmIW8YXW4-AeznkZYSsms3imlQLvoBgCthg&usqp=CAU">
    </div>
    <div class="col-lg-4">
      <img height="80%" width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFmIW8YXW4-AeznkZYSsms3imlQLvoBgCthg&usqp=CAU">
    </div>
  </div>







  <div class="_202">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <h6>About</h6>
          <div class="row">

            <div class="col-12">
              <a class="kishore" href="#">Contact Us</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">About Us</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Carrers</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Flipkart Stories</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Press</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Flipkart Wholesale</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Corporate Information</a>
            </div>

          </div>
        </div>
        <div class="col-2">
          <h6>Help</h6>
          <div class="row">
            <div class="col-12">
              <a class="kishore" href="#">Payments</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Shipping</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Cancellation & Returns</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">FAQ</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Report Infringement</a>
            </div>
          </div>
        </div>
        <div class="col-2">
          <h6>Return Policy</h6>
          <div class="row">
            <div class="col-12">
              <a class="kishore" href="#">Terms Of Use</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Security</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Privacy</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Sitemap</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">EPR Compliance</a>
            </div>
          </div>
        </div>

        <div class="col-2">
          <h6>Social</h6>
          <div class="row">
            <div class="col-12">
              <a class="kishore" href="#">Facebook</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">Twitter</a>
            </div>
            <div class="col-12">
              <a class="kishore" href="#">youTube</a>
            </div>
          </div>
        </div>
        <div class="col-2">
          <h6>Mail Us:</h6>
          <div class="row">
            <div class="col-12">
              <p class="kishore">Flipkart Internet Private Limited,<br>Buildings Alyssa, Begonia &<br>Clove Embassy Tech Village,<br>

                Outer Ring Road, Devarabeesanahalli Village,<br>

                Bengaluru, 560103,<br>

                Karnataka, India

              </p>
            </div>

          </div>
        </div>
        <div class="col-2">
          <h6>Registered Office Address</h6>
          <div class="row">
            <div class="col-12">
              <p class="kishore">Flipkart Internet Private Limited,<br>

                Buildings Alyssa, Begonia &<br>

                Clove Embassy Tech Village,<br>

                Outer Ring Road, Devarabeesanahalli Village,<br>

                Bengaluru, 560103,<br>

                Karnataka, India<br>

                CIN : U51109KA2012PTC066107<br>

                Telephone: 1800 202 9898

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>