<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/phpproject5/css/myaccount.css">
</head>
  <body>
      <div class="container-fluid">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header" style="padding-top:20px">
                 <a class="navbar-brand" href="#"><img src="http://localhost/phpproject5/images/logo.png" title="logo" /></a>
              </div>
                 <ul class="nav navbar-nav" >
                   <li><a href="#"><p>Overview</p></a></li>
                   <li><a href="#"><p>Send</p></a></li>
                   <li><a href="#"><p>My Files</p></a></li>
                   <li><a href="#"><p>Productivity</p></a></li>
                   <li><a href="#"><p>Upgrade</p></a></li>
                   <li><a href="#"><p>For Business</p></a></li>
                   <li><a href="#"><p>Support</p></a></li>
                 </ul>
            </div>
           </nav>
        <div class="account">
              My Account
        </div>
          <div class="square">
              <div class="col-md-2"></div>
              <div class="col-md-8">
            <div class="panel panel-default">
             <div class="panel-body">
                     <div class="col-md-2">
                         <a  href="#"><img src="http://localhost/phpproject5/images/2.png" title="logo" height="70px" width="70px" /><p><b>My Profile</b></p></a>
                     </div>
                     <div class="col-md-2">
                         <a  href="#"><img src="http://localhost/phpproject5/images/7.jpg" title="logo" height="70px" width="70px" /><p><b>Bill Info</b></p></a>
                     </div>
                  <div class="col-md-2">
                      <a  href="#"><img src="http://localhost/phpproject5/images/3.png" title="logo" height="70px" width="70px" /><p><b>Email Setting</b></p></a>
                     </div>
                  <div class="col-md-2">
                      <a  href="#"><img src="http://localhost/phpproject5/images/5.jpg" title="logo" height="70px" width="70px" /><p><b>Contact Us</b></p></a>
                     </div>
                  <div class="col-md-2">
                      <a  href="#"><img src="http://localhost/phpproject5/images/5.png" title="logo" height="70px" width="70px" /><p><b>DropBox</b></p></a>
                     </div>
                  <div class="col-md-2">
                      <a  href="#"><img src="http://localhost/phpproject5/images/4.png" title="logo" height="70px" width="70px" /><p><b>My Plan</b></p></a>
                     </div>
             </div>
            </div>
              </div>
              <div class="col-md-2"></div>
           </div>
          <div class="panel">
              <div class="col-md-2"></div>
              <div class="col-md-8">
              <div class="col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <b> My Account:</b>
                          <select class="form-control">
                        <option value="Day">pro</option>
                        <option value="Day">premium</option>
                          </select></br>
                          <b>Billing Cycle:</b>
                          <input type="text" class="form-control" name="cycle order" placeholder="order cycle">
                          </br>
                          <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                           aria-valuemin="0" aria-valuemax="100" style="width:40%" >
                          </div>
                       </div>
                          <b>File Storage Used:</b>
                          <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                           aria-valuemin="0" aria-valuemax="100" style="width:74%" >
                              74%complete (512kb)
                          </div>
                       </div>
                           <b>Download Bandwidth Used:</b>
                          <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                           aria-valuemin="0" aria-valuemax="100" style="width:51%" >
                              51%
                          </div>
                       </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-5">
                   <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="plan">
                          <b style="color:#015e12">Plan Details:</b>
                          <p > <input type="fixed" class="form-control" name="file size" value="Max File Size:2GB"</p>
                          <p><input type="text" class="form-control" name="file size" value="Max File Download:500"></p>
                          <p> <input type="text" class="form-control" name="file size" value="Max Download Bandwith Per Month:2GB"></p>
                          </div>                       
                          <div class="col-md-2"><b>Support:
                               <p> <input type="text"  name="file size" value="Chat:Yes"></p>
                               <p><input type="text"  name="file size" value="Knowledge Base:Yes"></p>
                               <p> <input type="text"  name="file size" value="Phone:Yes"></p>
                               <p><input type="text"  name="file size" value="Support Ticket:Yes"></p>
                              </b>    
                          </div>
                          </div>
                  </div>
              </div>
              <div class="col-md-3">
                   <div class="panel panel-default">
                      <div class="panel-body">
                          <b style="color:#f2620e">Promotional Upgrade:</b>
                          <p>Enter a promo code</p>
                          <input type="password" name="password" class="form-control"></br>
                          <a href="#">   <button type="submit" class="btn btn-success btn-sm ">Submit</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <a href="#"> <button type="submit" class="btn btn-default btn-sm">Cancel</button></a>
                          </br>
                          </br>
                          <b style="color:#89e24d"><u>Want more details idea??</u></b></br>
                          <b><z style="color:#29bbd8">Upgrade</z> to the pro and get 
                              the real power. For more details <a href="#">more</a></b>
                         <p style="padding-left: 25px; padding-top:10px; "> <a href="#"> <button type="submit" class="btn btn-default btn-xs">BUY NOW</button></a></p>
                      </div>
                  </div>
              </div>
          </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="help">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                  <div class="col-md-3"></div>
                  <div class="col-md-4">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <p><z>Need Help??</z><a href="#">Visit help center</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5"></div>
              </div>
              <div class="col-md-2"></div>
          </div>
      </div>
<footer class="footer1">
<div class="container">

<div class="row"><!-- row -->
            
               <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test Series Schedule</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Bhaktapur Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Baneswor Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Koteshwor Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Tinkune Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cahabil Mobilestore</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Ratnapark Mobilestore</a></li>
                                    <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>
                                    
                                </ul>
                    
                            </li>
                            
                 </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Admission Form</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i>  Computer Live Test</a></li>

                                </ul>
                    
              </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">MobileStore Pvt. Ltd.</h2>
                                <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@mobilestore.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(8AM to 10PM):</b>  +977-9814084309, +977-9814084310  </p>
    
    <p><b>Mobile Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>9824670000, </p>
    <p> +977-1 -6638498, 9824001111</p>
                                </div>
                                
                                <div class="social-icons">
                                
                      <ul class="nomargin">           
                        <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                       <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                       <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                       <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                     </ul>
                   </div>
                 </li>
                </ul>
              </div>
             </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

  <div class="container">

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

