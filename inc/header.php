<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/phpproject5/css/header.css">
    <script src="jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <style>
       #map-container { height: 350px;width:420px;}
      </style>
</head>
  <body>
      <div class="container">
                <nav class="navbar ">
                    <div class="header-top-nav">
                      <div class="col-md-8 col-md-offset-4">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="register"><a href="register.php"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
                            <li class="login"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li class="delivery"><a href="#"><span class="glyphicon glyphicon-send"></span> Delivery</a></li>
                            <li class="Checkout"><a href="#"><span class="glyphicon glyphicon-check"></span> Checkout</a></li>
                            <li class="my account"><a href="myaccount.php"><span class="glyphicon glyphicon-user"></span> My account</a></li>
                            <li class="hopingcart"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>shopingcart </a> </li>
                             <li class="logout"><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Logout </a> </li>
                        </ul>
                      </div>
                    </div>
                </nav>
      </div>
      <nav class="navbar navbar-default " data-spy="affix" data-offset-top="70">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#"><img src="http://localhost/phpproject5/images/logo.png" title="logo" class="img-responsive" ></a>
          </div>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php"> HOME</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT<span class="caret"></span></a>
                     <ul class="dropdown-menu" >
                       <li><a href="about.php"> Features</a></li>
                       <li class="divider"></li>
                <li><a href="#"> Sustainability</a></li>
                 </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">BLOG <span class="caret"></span></a>
                     <ul class="dropdown-menu" >
                       <li><a href="blog.php"> Latest news</a></li>
                        <li class="divider"></li>
                <li><a href="#"> Research/Technique</a></li>
                 <li class="divider"></li>
                <li><a href="store.php"> Review</a></li>
                 </ul>
                </li>
                <li><a href="contact.php"> CONTACT</a></li>
                <li>
                    <div class="search" style="padding-top: 6px">
                  <form action="" >
                    <input type="Search" placeholder="Search..." class="form-control" />
                  </form> 
                    </div>
                </li>
             </ul>
        </div>
      </nav>
