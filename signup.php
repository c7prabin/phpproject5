<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>
<body >
     <nav class="navbar navbar-default " >
        <div class="container-fluid">
          <div class="navbar-header">
              <b><h3><i>Mobilestore@.com</i></h3></b> 
              <p>Trade start here <a href="home.php"> Back Home</a></p>
          </div>
            
        </div>
      </nav>
<div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
        <div class=" col-md-6 ">
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class=" col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus />
                </div>
                <div class=" col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
                <input class="form-control" name="youremail" placeholder="Your Email" type="email" required/>
                <input class="form-control" name="password" placeholder="New Password" type="password" required />
                <input class="form-control" name="reenterpassword" placeholder="Re-enter password" type="password" required/>
            <label for="">
                Birth Date</label>
            <div class="row">
                <div class=" col-md-4">
                    <select class="form-control">
                        <option value="Month">january</option>
                        <option value="Month">feburary</option>
                         <option value="Month">march</option>
                        <option value="Month">april</option>
                        <option value="Month">may</option>
                        <option value="Month">june</option>
                         <option value="Month">july</option>
                        <option value="Month">august</option>
                        <option value="Month">september</option>
                         <option value="Month">october</option>
                        <option value="Month">november</option>
                       <option value="Month">december</option> 
                    </select>
                </div>
                <div class=" col-md-4">
                    <select class="form-control">
                        <option value="Day">Day</option>
                    </select>
                </div>
                <div class=" col-md-4">
                    <select class="form-control">
                        <option value="Year">Year</option>
                    </select>
                </div>
            </div>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                Female
            </label>
            <br />
            <br />
            <button class="btn btn-lg btn-success btn-block" type="submit">
                Create</button>
            <div class="or">
            <h3>OR</h3>
            </div>
             <a href="login.php"> <button type="button" class="btn btn-block btn-default">Login</button></a>
            </form>
        </div>
    </div>
    </div>
    
</div>
     <footer class="footer1">
<div class="footer-bottom">

  <div class="container-fluid">

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="copyright">

          © 2015,MobileStore, All rights reserved

        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="design">

           <a href="#">MobileStore </a> |  <a target="_blank" href="http://www.webenlance.com">Web Design & Development by Webenlance</a>

        </div>

      </div>

    </div>

  </div>

</div>
</body>
</html>
