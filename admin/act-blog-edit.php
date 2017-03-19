<?php
require_once '../db/connect.php';
require_once '../db/function.php';

//debug($_POST);

$featured_image = $_FILES['featured_image'];

if(move_uploaded_file($featured_image['tmp_name'], '../images/'.$featured_image['name'])){
    $featured_image = $featured_image['name'];
}

$blog_id = $_POST['blog_id'];
$title = $_POST['title'];
$short_desc = $_POST['short_desc'];
$long_desc = $_POST['long_desc'];

if($_FILES['featured_image']['error']== 0) 
   {
$sql = "UPDATE blogs"
    . " SET title = '$title', short_desc = '$short_desc', long_desc = '$long_desc', featured_image = '$featured_image'"
    . " WHERE id = '$blog_id'";
}
else {
   $sql = "UPDATE blogs"
   . " SET title = '$title', short_desc = '$short_desc', long_desc = '$long_desc'"
   . " WHERE id = '$blog_id'";
}
if(mysqli_query($conn,$sql))
{
    $_SESSION['flash_msg'] = '';
    header("Location: blog.php");
}
 else {
    echo 'mysqli_error($conn)';    
}
