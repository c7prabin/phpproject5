<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <script src="jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
  <body>
      <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#"><img src="http://localhost/phpproject5/images/logo.png" title="logo" class="img-responsive"></a>
          </div>
             <ul class="nav navbar-nav navbar-right">
                 <li>
                    <div class="search" style="padding-top: 6px">
                  <form action="" >
                    <input type="Search" placeholder="Search..." class="form-control" />
                  </form> 
                    </div>
                </li>
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
                <li><a href="../logout.php">LOGOUT</a></li>
                <li> <a href="blog-add.php">ADD NEW</a> </li>
             </ul>
        </div>
      </nav>

<?php
require_once '../db/connect.php';
//echo $_SESSION["user_id"];

//$sql = "SELECT b.*, u.username FROM blogs AS b"
//        . " JOIN blogs AS u ON b.user_id = u.user_id"
//        . " WHERE u.user_id = {$_SESSION['user_id
//$sql="select blogs.*, students.username from blogs inner join students on blogs.id=students.Id";
$sql="select *from blogs";
//echo $sql;
$result = mysqli_query($conn, $sql);
//var_dump($result);
?>


   
    
<?php
if (isset($_SESSION['flash_msg'])) {
    echo $_SESSION['flash_msg'];
    unset($_SESSION['flash_msg']);
}
?>
<div class="container"  style="margin-top:100px">
    <div class="col-md-8">
        <h2 style="color:#048e08">Blog</h2>
        <?php
//        var_dump($result);
        if ($result) {
            while ($blogs = mysqli_fetch_assoc($result)) {
                ?>
    <div class="row">
                     <div class="col-md-4">
                       <p>Duis aute irure dolor in reprehenderit</p>
                         <a href="#"><span class="glyphicon glyphicon-calendar"></span> Jan-21-2016</a>
                         <a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a>
                         <a href="#"><span class="glyphicon glyphicon-envelope"></span>10 </a>
               
                        <div class="panel panel-default">
                         <div class="panel-body">
                              <img src="../images/<?= $blogs['featured_image'] ?>" alt="Flower" class="img-responsive"  >
                         </div>
                        </div>
                      <div class="edit" >
                          <button type="button">  <a href="blog-edit.php?blogs_id=<?= $blogs['id'] ?>">Edit</a></button>
                          <button type="button">  <a href="act-blog-delete.php?blogs_id=<?= $blogs['id'] ?>" onclick="return confirm('Confirm delete?')">Delete</a></button>     
                      </div>
            
                     </div>
                     <div class="col-md-5">
                        <div class="first">
                            <p><?= $blogs['long_desc'] ?></p>
                         </div>
                       </div>
                       <div class="col-md-3">
                       </div>  
    </div>
    <br><hr><br>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="4">No data in blog table.</td>
            </tr>
            <?php
        }
        ?>
</div>
<div class="col-md-4">
    <h4>Categories</h4>
           <ul class="content-sidebar">
            <li><a href="#">Accord Mobiles</a></li>
            <li><a href="#">Ace Mobile</a></li>
            <li><a href="#">Acer Mobile</a></li>
            <li><a href="#">Airfone</a></li>
            <li><a href="#">Apple</a></li>
            <li><a href="#">Blackberry</a></li>
            <li><a href="#">Byond Tech</a></li>
            <li><a href="#">Celkon Mobiles</a></li>
            <li><a href="#">Dell Mobile Phones </a></li>
            <li><a href="#">Fly Mobile</a></li>
            <li><a href="#">Fujezone Mobiles </a></li>
            <li><a href="#">HTC</a></li>
            <li><a href="#">LG Mobiles</a></li>
            <li><a href="#">Longtel Mobile</a></li>
            <li><a href="#">Maxx</a></li>
            <li><a href="#">Micromax Mobiles </a></li>
            <li><a href="#">Samsung Mobiles</a></li>
            <li><a href="#">Sony Ericsson Mobiles</a></li>
            <li><a href="#">Wynncom Mobiles</a></li>
            <li><a href="#">HTC</a></li>
            <li><a href="#">LG Mobiles</a></li>
            <li><a href="#">Longtel Mobile</a></li>
            <li><a href="#">Maxx</a></li>
            <li><a href="#">Micromax Mobiles </a></li>
            <li><a href="#">Samsung Mobiles</a></li>
            <li><a href="#">Sony Ericsson Mobiles</a></li>
            <li><a href="#">Wynncom Mobiles</a></li>
            <li><a href="#">Maxx</a></li>
            <li><a href="#">Micromax Mobiles </a></li>
            <li><a href="#">Samsung Mobiles</a></li>
            <li><a href="#">Sony Ericsson Mobiles</a></li>
            <li><a href="#">Wynncom Mobiles</a></li>
            <li><a href="#">HTC</a></li>
            <li><a href="#">LG Mobiles</a></li>
            <li><a href="#">Longtel Mobile</a></li>
            <li><a href="#">Maxx</a></li>
            <li><a href="#">Micromax Mobiles </a></li>
           </ul>
</div>
</div>
       <div class="container">
        <ul class="pagination">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">...</a></li>
    <li><a href="#">next</a></li>
  </ul>
      </div>
<?php include '../inc/footer.php' ?>