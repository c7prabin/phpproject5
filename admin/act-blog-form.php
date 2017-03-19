<?php
require_once '../db/connect.php';

$title = $_POST['title'];
$short_desc = $_POST['short_desc'];
$long_desc = $_POST['long_desc'];
$featured_image = $_POST['featured_image'];
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO blogs"
    . " (title, short_desc, long_desc, featured_image, user_id)"
    . " VALUES ('$title', '$short_desc', '$long_desc', '$featured_image', $user_id)";

if(mysqli_query($conn, $sql)){
    $_SESSION['flash_msg'] = 'Data inserted.';
    header('Location: blog.php');
}
else 
{
    echo 'mysqli_error($conn)';
}
 