<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        body{
            font-family: quicksand;
        }

        .links{
        display: flex;
        padding: 50px;
        float: right;
        }

        .links li{
        list-style: none;
        }

        .links li a{
        text-decoration: none;
        color: black;
        padding: 10px 20px;
        float: right;
        align-content: right;
        }

        .links li a:hover{
        color: #e67e22;
        border-bottom:2px solid #e67e22;
        transition:all 0.5s  ease-in;
        }

        a{
        text-decoration: none;
        color: #566573;
        }

        .logo img{
        float: left;
        height: 90px;
        border-radius: 300%;
        margin: 30px 30px;
        }

        a:hover{
        text-decoration: underline;
        }
        .container{
            position: absolute;
            top: 25%;
            left: 10%;
        }

        img{
            height: 250px;
        }
    </style>
    <title>Menu</title>
</head>
<body>
    <div class="header" id="top" style="width: 100% !important;">
        <span class="logo"><a href="welcome.php"><img src="rai34.jpg" alt=""></a></span>
        <ul class="links">
            <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a href="https://www.railyatri.in/pnr-status">PNR Status</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact us.html">Contact</a></li>
            <li><a href="#">Services</a></li>
        </ul>
    </div>

    <div class="container">

        <h1>Menu</h1>
        <div class="progress">
            <div class="indeterminate red"></div>
        </div>

    <div class="row">
    <div class="col s3">
      <div class="card">
        <div class="card-image">
          <img src="pani.jpg">
        </div>
        <div class="card-content center">
          <h4 class="center ">Paani Puri</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 10</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
    </div>

    <div class="col s3">
    <div class="card">
        <div class="card-image">
          <img src="kheer.jpg">
        </div>
        <div class="card-content center">
          <h4 class="center ">Kheer</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 100</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
    </div>

    <div class="col s3">
    <div class="card">
        <div class="card-image">
          <img src="bare.jpg">
        </div>
        <div class="card-content center">
          <h4 class="center">Dahi-Bare</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 50</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
    </div>

    <div class="col s3">
    <div class="card">
        <div class="card-image">
          <img src="popha.jpg">
        </div>
        <div class="card-content center">
          <h4 class="center">Poha</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 25</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col s3">
  <div class="card">
        <div class="card-image">
          <img src="momo.jpg">
        </div>
        <div class="card-content center">
          <h4 class="center">Momos</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 20</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
    </div>

    <div class="col s3">
    <div class="card">
        <div class="card-image">
          <img src="ids.jpg">
        </div>
        <div class="card-content center">
          <h4 class="center">Sambhar</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 90</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
    </div>

    <div class="col s3">
    <div class="card">
        <div class="card-image">
          <img src="sand.png">
        </div>
        <div class="card-content center">
          <h4 class="center">Sandwich</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 40</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
    </div>

    <div class="col s3">
    <div class="card">
        <div class="card-image">
          <img src="sand2.png">
        </div>
        <div class="card-content center">
          <h4 class="center">Hotdog</h4>
        </div>
        <div class="card-action center">
            <h4>₹ 60</h4><br>
            <button class="btn waves-effect btn-small red"><a href="ORDER2.php">Add to cart&nbsp;<i class="fa fa-shopping-cart"></a></i></button>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
