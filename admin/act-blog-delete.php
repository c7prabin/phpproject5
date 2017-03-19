<?php
require_once '../db/connect.php';
require_once '../db/function.php';

//debug($_POST);

$blogs_id = $_GET['blogs_id'];

// get image name to delete
$sql = "SELECT featured_image FROM blogs WHERE id = '$blogs_id'";
$result = mysqli_query($conn,$sql);
$blogs = mysqli_fetch_assoc($result);

// delete file using full path
unlink('../images/'.$blogs['featured_image']);
// delete record from table
$sql = "DELETE FROM blogs WHERE id = $blogs_id";
if(mysqli_query($conn, $sql))
{
    $_SESSION['flash_msg'] = '';
    header('Location: blog.php');
}
 else {
    echo 'mysqli_error($conn)';
 }


